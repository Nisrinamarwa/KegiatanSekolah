<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Activity</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-white">
    <div class="content px-3">
        <div class="mb-3">
            <h3 class="text-info">Laporan periode activity</h3>
            <h5 class="text-muted">SMK AL-BAHRI</h5>
            <h5 class="text-muted">Jl. Yon Armed No.07</h5>
        </div>
        <div class="mb-3">
            @if(request('awal'))
                <small>Dari Tanggal {{request('awal')}} sampai tanggal {{request('akhir')}}</small>
            @endif
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Idr</th>
                    <th>Status</th>
                    <th>Desc</th>
                    <th>Peserta</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($activitys as $activity)
                    <tr>
                        <td>{{$activity->kode_activity}}</td>
                        <td>{{$activity->nama_activity}}</td>
                        <td>{{$activity->idr}}</td>
                        <td>{{$activity->status}}</td>
                        <td>{{$activity->decs}}</td>
                        <td>{{$activity->jumlah_peserta}}</td>
                        <td>{{$activity->tgl_awal}} - {{$activity->tgl_selesai}}</td>
                    </tr>
                @empty
                    <td colspan="8" class="text-center">Maaf Tanggal yang ada masukan tidak tersedia</td>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>