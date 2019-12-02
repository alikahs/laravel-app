@extends('template/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-6">
			<h2>Daftar Mahasiswa</h2>

			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach( $students as $student )
				    <tr>
				      <td>{{$loop->iteration}}</td>
				      <td>{{$student->nama}}</td>
				      <td>
				      	<a href="{{ url ('students/' . $student->id) }}" class="badge badge-info">show detail</a>
				      </td>
				    </tr>
				@endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection