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
	<a href="{{ route('roles.create') }}" class="btn btn-success">Add Role    <i class="fas fa-plus"></i></a>
</div>

<div class="container">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Role</th>
	      <th scope="col">View</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($roles as $role)
	    <tr>
	      <th scope="row">{{ $role->id }}</th>
	      <td>{{ $role->name }}</td>
	      <td><a href="{{ route('roles.show', $role->id) }}" class="btn btn-outline-success">View </a></td>
	      <td><a href="{{ route('roles.edit', $role->id) }}" class="btn btn-outline-primary"><i class="fas fa-pencil"></i>Edit</a></td>
	      <td>
	      	<form action="{{ route('roles.delete', $role->id) }}" method="POST">
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