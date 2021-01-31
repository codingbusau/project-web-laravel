@extends('template/main')

@section('judul',"Pegawai")
@section('konten')

<body>
	<div class="container">
        <br>
        <h1 align="center" > Daftar Pegawai</h1>
        <br>   
        
        <table class="table table-success table-striped">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nip</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Level</th>
                    <th scope="col">Gaji</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    
                @foreach ($datapegawai as $m)
                
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $m['nip']}}</td>
                        <td>{{ $m['nama']}}</td>
                        <td>{{ $m['umur']}}</td>
                        <td>{{ $m['alamat']}}</td>
                        <td>{{ $m['level']}}</td>
                        <td>@php
                            if ($m['level']=="A1") {
                                $gaji = 6000000 + 1500000;
                            }
                            elseif ($m['level']=="A2") {
                                $gaji = 4000000 + 100000;
                            }
                            elseif ($m['level']=="A3") {
                                $gaji = 2500000 + 500000;
                            }
                            elseif ($m['level']=="A4") {
                                $gaji = 1000000;
                            }
                        @endphp
                        {{$gaji}}</td>
                        <td><a type="button" class="btn btn-primary" href="{{ url('/pegawai/' . $m['id']) }}">Edit</a> | 
                            <form action="{{url('/pegawai/' . $m['id']) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                    </tr>  
                @endforeach
                </tbody>
            </table>
            <a href="{{ url('pegawai/create')}}" type="button" class="btn btn-primary">Tambah</a>
    </div>

    @endsection
</body>
</html>