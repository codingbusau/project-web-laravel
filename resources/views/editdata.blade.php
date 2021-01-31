@extends('template/main')

@section('judul',"Edit Data")
@section('konten')
<body>
	<div class="container">
        <br>
        <h1 align="center" > Edit Data Pegawai</h1>
        <br>
        <form method="POST" action="{{url('pegawai/' . $pegawai['id']) }}">
            @method('put')    
            @csrf

            <input type="hidden" name="id" id="id" value="{{ $pegawai['id']}}">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror"  id="nip" name="nip" value="{{ $pegawai['nip']}}" placeholder="NIP">
                @error('nip')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $pegawai['nama']}}" placeholder="Nama Pegawai">
                @error('nama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Umur</label>
                <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ $pegawai['umur']}}"  placeholder="Umur Pegawai">
                @error('umur')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $pegawai['alamat']}}"  placeholder="Alamat Pegawai">
                @error('alamat')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Level</label>
                <input type="text" class="form-control @error('level') is-invalid @enderror" id="level" name="level" value="{{ $pegawai['level']}}" placeholder="Level Pegawai">
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