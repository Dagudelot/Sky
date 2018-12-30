@extends('admin.layouts.app')

@section('page', 'All Roles')

@section('content')

@if(session('info'))
<div class="container">
	<div class="alert alert-warning" role="alert">
		<span class="closebtn" onclick="this.parentElement.style.display = 'none"; style="cursor: pointer;">x</span>
		{{ session('info') }}
	</div>
</div>
@endif

<div class="col-sm-12">
	<a href="{{ route('permission.create') }}" class="btn btn-success">Add Permission    <i class="fas fa-plus"></i></a>
</div>

<div class="container">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Name</th>
	      <th scope="col">Description</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($permissions as $permission)
	    <tr>
	      <th scope="row">{{ $permission->id }}</th>
	      <td>{{ $permission->name }}</td>
	      <td>{{ $permission->description }}</td>
	      <td><a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-outline-primary"><i class="fas fa-pencil"></i>Edit</a></td>
	      <td>
	      	<form action="{{ route('permission.delete', $permission->id) }}" method="POST">
	      		@csrf
	      		@method('PATCH')
	      		<button class="btn btn-outline-danger" type="submit">Delete</button>
	      	</form>
	  	  </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
</div>

@endsection