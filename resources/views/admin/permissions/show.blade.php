@extends('admin.layouts.app')

@section('page', 'Edit Role')

@section('content')

<div class="container">
	<form class="was-validated" action="{{ route('roles.show', $role->id) }}" method="POST">
		@csrf
		@method('PATCH')

		<div class="form-row">
			<div class="col-sm-6 mb-3">
				<label for="RoleName">Name of the role</label>
				<input type="text" name="name" class="form-control is-valid" id="RoleName" value="{{ $role->name }}" disabled>
				<div class="invalid-feedback">You have to add a name</div>
			</div>
			<div class="col-sm-6 mb-3">
				<label class="ml-3">Be careful with the permissions you allow</label>
				<div class="form-group">
					<ul class="nav navbar-nav">
						<div class="col-auto my-1">							
							@foreach($permissions as $permission)							
								<div class="col-sm-6">
									<li>
										<i class="fas fa-unlock-alt"></i>  {{ $permission->description }}
									</li>
								</div>																		
							@endforeach
							
						</div>
					</ul>
				</div>
			</div>
		</div>

		<button class="btn btn-primary"><i class="fas fa-arrow-left"> Back</i></button>
	</form>
</div>

@endsection