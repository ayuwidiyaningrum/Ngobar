<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\KategoriRuangan;
use App\Models\Gedung;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\Numeric_;
use PDF;
use App\Exports\RuanganExport;
use Maatwebsite\Excel\Facades\Excel;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Ruangan::latest()->paginate(5);
        return view('ruangan.index', compact('ruangan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ambil data kategori dan gedung
        $kategori_ruangan = KategoriRuangan::all();
        $gedung = Gedung::all();
        return view('ruangan.create', compact('kategori_ruangan', 'gedung'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori_ruangan_id' => 'required',
            'gedung_id' => 'required',
            'lantai' => 'required|numeric',
            'kapasitas' => 'required|numeric',
            'foto1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('foto1')) {
            $destinationPath = 'img/ruangan/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['foto1'] = "$profileImage";
        }

        /*Ruangan::create($input);

        return redirect()->route('ruangan.index')
            ->with('success', 'Ruangan created successfully.');*/

        try {
            Ruangan::create($input);
            return redirect()->route('ruangan.index')
                // return redirect()->back()
                ->with('success', 'Ruangan created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('ruangan.index')
                ->with('error', 'Error during the creation!');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruangan $ruangan)
    {
        $kategori_ruangan = KategoriRuangan::all();
        $gedung = Gedung::all();
        return view('ruangan.edit', compact('ruangan', 'kategori_ruangan', 'gedung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        //proses input data gedung
        $request->validate([
            'nama' => 'required',
            'kategori_ruangan_id' => 'required',
            'gedung_id' => 'required',
            'kapasitas' => 'required|numeric',
            'lantai' => 'required|numeric',
            'foto1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        //--------proses update data lama & upload file foto baru--------
        $image = $request->file('foto1');
        if (!empty($ruangan->foto1)) //kondisi akan upload foto baru
        {
            if (!empty($ruangan->foto1)) { //kondisi ada nama file foto di tabel
                //hapus foto lama
                unlink('img/ruangan/' . $ruangan->foto1);
            }
            //proses upload foto baru
            $destinationPath = 'img/ruangan/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            //print_r($profileImage); die();
            $image->move($destinationPath, $profileImage);
            $input['foto1'] = "$profileImage";
        } else //kondisi user hanya update data saja, bukan ganti foto  
        {
            $input['foto1'] = $ruangan->foto1; //nama file foto masih yg lama
        }

        try {

            $ruangan->update($input);

            return redirect()->route('ruangan.index')
                // return redirect()->back()
                ->with('success', 'Ruangan updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('ruangan.index')
                ->with('error', 'Error during the creation!');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function destroy(Ruangan $ruangan)
    // {
    //     //--------hapus dulu fisik file foto--------
    //     if (!empty($ruangan->foto1)) unlink('img/ruangan/' . $ruangan->foto1);

    //     //proses hapus data
    //     $ruangan->delete();

    //     return redirect()->route('ruangan.index')
    //         ->with('success', 'Data Ruangan Berhasil dihapus');
    // }
    public function delete($id)
    {
        $ruangan = Ruangan::find($id);

        if (!empty($ruangan->foto1)) unlink('img/ruangan/' . $ruangan->foto1);

        $delete = Ruangan::where('id', $id)->delete();
        return redirect()->back();
    }

    public function generatePDF()
    {
        $data = [
            'title' => 'Tes Export to PDF Using Barryvdh Ext',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('ruangan/myPDF', $data);

        return $pdf->download('hasil_exportToPdf.pdf');
    }

    public function ruanganPDF()
    {

        $data = Ruangan::all();
        // dd($data);

        $pdf = PDF::loadView('ruangan/ruanganPDF', ['data' => $data]);

        return $pdf->download(date('d/m/y') . '_data_ruanganPdf.pdf');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function ruanganExcel()
    {
        return Excel::download(new RuanganExport, date('d-m-y') . '_data_ruangan.xlsx');
    }
}
