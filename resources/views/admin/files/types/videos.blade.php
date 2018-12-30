@extends('admin.layouts.app')

@section('page', 'Videos')

@section('content')

@if(session('info'))
<div class="container">
	<div class="alert alert-danger" role="alert">
		<span class="closebtn" onclick="this.parentElement.style.display = 'none"; style="cursor: pointer;">x</span>
		<strong>Great! </strong> {{ session('info') }}
	</div>
</div>
@endif

@if($errors->any())
<div class="container">
	<div class="alert alert-warning" role="alert">
		<span class="closebtn" onclick="this.parentElement.style.display = 'none"; style="cursor: pointer;">x</span>
		<strong>Sorry! </strong> We could not delete your file.
	</div>
</div>
@endif

<div class="container-fluid">
	<div class="row">
		@forelse($videos as $video)
			<div class="col-sm-12 col-md-4 col-lg-3">
				<div class="card" style="width: 18rem;">
					<video class="card-img-top" src="{{ asset('storage') }}/{{ $folder }}/video/{{ $video->name }}.{{ $video->extension }}" controls></video>
					<div class="card-body">
					    <p class="card-text">{{ $video->created_at->DiffForHumans() }}</p>
					    
						<div class="row">
					    	<a href="{{ asset('storage') }}/{{ $folder }}/video/{{ $video->name }}.{{ $video->extension }}" target="_blank" class="btn btn-primary ml-4">View <i class="fas fa-play"></i></a>
						    <!--<form action="{{ route('file.delete', $video->id) }}" method="POST">
						    	@csrf
								<input type="hidden" name="_method" value="PATCH">
								<button class="btn btn-danger ml-4" type="submit"><i class="fas fa-trash pull-right"></i> Delete</button>
						    </form>-->
						    <button class="btn btn-danger ml-4" data-toggle="modal" data-target="#delete{{ $video->id }}"><i class="fas fa-trash pull-right"></i> Delete</button>
						</div>
				  </div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="delete{{ $video->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Confirm</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        Are sure you want to delete this file?
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close <i class="fas fa-times"></i></button>
			        <form action="{{ route('file.delete', $video->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="PATCH">
						<button class="btn btn-danger pull-right" type="submit"><i class="fas fa-trash"></i> Confirm</button>
					</form>
			      </div>
			    </div>
			  </div>
			</div>
			<!--/Modal-->
		@empty
		<div class="container mb-3">
				<div class="alert alert-warning" role="alert">
					<span class="closebtn" onclick="this.parentElement.style.display = 'none';" style="cursor: pointer;">x</span>
					<strong>Empty. </strong> You haven't uploaded videos yet.
				</div>
			</div>
		@endforelse
	</div>
</div>

@endsection
