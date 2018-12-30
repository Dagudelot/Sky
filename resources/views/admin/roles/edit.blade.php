@extends('admin.layouts.app')

@section('page', 'Edit Role')

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
	<form class="was-validated" action="{{ route('roles.update', $role->id) }}" method="POST">
		@csrf
		@method('PATCH')

		<div class="form-row">
			<div class="col-sm-6 mb-3">
				<label for="RoleName">Name of the role</label>
				<input type="text" name="name" class="form-control is-valid" id="RoleName" value="{{ $role->name }}" required>
				<div class="invalid-feedback">You have to add a name</div>
			</div>
			<div class="col-sm-6 mb-3">
				<label class="ml-3">Be careful with the permissions you allow</label>
				<div class="form-group">
					<ul>
						<div class="col-auto my-1">
							<div class="custom-control custom-checkbox mr-sm-2">
								@foreach($permissions as $permission)									
									<li>
										<input type="checkbox" name="permissions[]" class="custom-control-input" id="{{ $permission->id }}" value="{{ $permission->id }}"
										@if($role->permissions->contains($permission)) checked
										@endif
										>
										<label for="{{ $permission->id }}" class="custom-control-label"> {{ $permission->description }}</label>
									</li>
									
								@endforeach
							</div>
						</div>
					</ul>
				</div>
			</div>
		</div>

		<button class="btn btn-primary">Update role <i class="fas fa-plus-circle pull-right"></i></button>
	</form>
</div>

@endsection