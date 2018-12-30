@extends('admin.layouts.app')

@section('page', 'Upload file')

@section('content')

@if(session('info'))
<div class="container">
	<div class="alert alert-success" role="alert">
		<span class="closebtn" onclick="this.parentElement.style.display = 'none";>x</span>
		<strong>Great! </strong> {{ session('info') }}
	</div>
</div>
@endif

@if($errors->any())
<div class="container">
	<div class="alert alert-danger" role="alert">
		<span class="closebtn" onclick="this.parentElement.style.display = 'none";>x</span>
		<strong>Sorry! </strong> We could not upload your file.
	</div>
</div>
@endif

<form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
	@csrf
	
	<div class="row d-flex flex-row justify-content-center align-items-center pt-5">
		<div class="form-group">
			<label for="file">
				Select a file to upload
			</label>
			<input type="file" class="form-control-file" name="file" required>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary file">Upload</button>
		</div>
	</div>

</form>

@endsection