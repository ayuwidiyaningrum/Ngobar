<!DOCTYPE html>
<html>
<head>
    <title>Data Ruangan</title>
</head>
<body>
    <h3 align="center">Data Ruangan</h3>
    <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
          <tr>
            <th bgcolor="grey">No</th>
            <th>Nama Ruangan</th>
            <th>Kategori Ruangan</th>
            <th>Gedung</th>
            <th>Kapasitas</th>
          </tr>
        </thead>
        <tbody>
        @php $no=1; @endphp
        @foreach($data as $r)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $r->nama }}</td>
            <td>{{ $r->kategoriRuangan->nama }}</td>
            <td>{{ $r->gedung->nama }}</td>
            <td>{{ $r->kapasitas }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>