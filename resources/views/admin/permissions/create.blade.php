@extends('admin.layouts.app')

@section('page', 'Create Role')

@section('content')

@if(session('info'))
<div class="container">
	<div class="alert alert-success" role="alert">
		<span class="closebtn" onclick="this.parentElement.style.display = 'none"; style="cursor: pointer;">x</span>
		<strong>Great! </strong> {{ session('info') }}
	</div>
</div>
@endif

<div class="container">
	<form class="was-validated" action="{{ route('permission.store') }}" method="POST">
		@csrf
		<input type="hidden" name="_method" value="PATCH">

		<div class="form-row">
			<div class="col-sm-6 mb-3">
				<label for="PermissionName">Name of the permission</label>
				<input type="text" name="name" class="form-control is-valid" id="PermissionName" placeholder="Permission name" required>
				<div class="invalid-feedback mb-3">You have to add a name</div>
			</div>
			<div class="col-sm-6 mb-3">
				<label for="PermissionName">Description of the permission</label>
				<input type="text" name="description" class="form-control is-valid" id="PermissionName" placeholder="Permission name" required>
				<div class="invalid-feedback">You have to add a description</div>
			</div>
		</div>

		<button class="btn btn-primary">Add permission <i class="fas fa-plus-circle pull-right"></i></button>
	</form>
</div>

@endsection