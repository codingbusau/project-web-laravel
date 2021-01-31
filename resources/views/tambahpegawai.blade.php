@extends('template/main')

@section('judul',"Tambah Data")
@section('konten')
<body>
	<div class="container">
        <br>
        <h1 align="center" > Tambah Data Pegawai</h1>
        <br>
        <form method="POST" action="{{url('pegawai/')}}">    
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror"  id="nip" name="nip" placeholder="NIP">
                @error('nip')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Pegawai">
                @error('nama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Umur</label>
                <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" placeholder="Umur Pegawai">
                @error('umur')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Alamat Pegawai">
                @error('alamat')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Level</label>
                <input type="text" class="form-control @error('level') is-invalid @enderror" id="level" name="level" placeholder="Level Pegawai">
                @error('level')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ url('pegawai')}}" type="button" class="btn btn-primary">Kembali</a>
        </form>
    </div>

	
    @endsection
</body>
</html>