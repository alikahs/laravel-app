@extends('template/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-8">
			<h2 class="mt-3">Form Tambah Data Mahasiswa</h2>

			<form method="post" action="/students">
				@csrf
			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
			    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
			  </div>
			  <div class="form-group">
			    <label for="nrp">NRP</label>
			    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nrp" name="nrp">
			    @error('nrp')<div class="invalid-feedback">{{ $message }}</div>@enderror
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email">
			    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
			  </div>
			  <div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
			    @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
			  </div>
			  <button type="submit" class="btn btn-info">Tambah Data!</button>
			</form>			

		</div>
	</div>
</div>
@endsection