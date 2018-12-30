@extends('layouts.app')

@section('content')

<!--Main section / Jumbotron-->
<main role="main">
   <section class="jumbotron bg text-center mb-0">
      <div class="row pt-5 bg-home">

         <div class="col-sm-12 col-md-12 col-lg-6 pt-5 text-left">
            <div class="container">
               <h5 class="title-home pt-5 ml-5">
                  Save your files <br>
                  with more efficiency and <b>security</b>
               </h5>
               <p class="subtitle-home pt-4 ml-5">
                  Get the storage you need Upload files and view them <br>from any device, whenever you want.
               </p>
               <a href="#" class="btn btn-primary mt-4 ml-5">Try it for free 30 days.</a>
               <p class="mt-2 ml-5">
                  You can also <a href="">Buy a plan right now!</a>
               </p>

            </div>
         </div>

         <div class="col-sm-12 col-md-6 d-none d-md-none d-lg-block shadow">
               <div class="container">
                  <img src="{{ asset('img/main.jpg') }}" class="w-100 img-home">
               </div>
         </div>

      </div>
   </section>
</main>
<!--/Main section / Jumbotron-->


<!--Alert-->
<div class="alert alert-light alert-home text-center">
   Discover all the potential this app has for you. Available 24/7.
</div>
<!--/Alert-->

<!--Alert-->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
   <p class="lead subtitle-home">
      Compare the plans and choose your favorite.
   </p>
</div>
<!--/Alert-->

<!--Plans-->
<div class="container">
   <div class="d-flex flex-row justify-content-center align-items-center">
      <div class="row mt-5 mb-4">
         
         <div class="col-lg-4 col-md-6 text-center">
            <div class="card mb-4">
               <div class="card-header">
                  <h4 class="my-0 font-weight-normal">Monthly</h4>
               </div>
               <div class="card-body">
                  <h1 class="card-title pricing-card-title">
                     $19 <small class="text-muted">month</small>
                  </h1>
                  <ul class="list-unstyled mt-3 mb-4">
                     <li><i class="fas fa-dollar-sign"></i>20% off</li>
                     <li><i class="fas fa-user-circle"></i>Multiple sessions</li>
                     <li><i class="fas fa-hdd"></i>200 GB for storaging</li>
                     <li><i class="fas fa-headset"></i>Technical support</li>
                     <li><i class="fas fa-calendar-alt"></i>Access 24/7</li>
                     <li><i class="fas fa-cloud-upload-alt"></i>Upload any type of file</li>
                  </ul>
               </div>
               <div class="card-footer">
                  <button type="button" class="btn btn-outline-primary">Get plan!</button>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 text-center">
            <div class="card mb-4">
               <div class="card-header">
                  <h4 class="my-0 font-weight-normal">Biannual</h4>
               </div>
               <div class="card-body">
                  <h1 class="card-title pricing-card-title">
                     $199 <small class="text-muted">semester</small>
                  </h1>
                  <ul class="list-unstyled mt-3 mb-4">
                     <li><i class="fas fa-dollar-sign"></i>40% off</li>
                     <li><i class="fas fa-user-circle"></i>Multiple sessions</li>
                     <li><i class="fas fa-hdd"></i>1500 GB for storaging</li>
                     <li><i class="fas fa-headset"></i>Technical support</li>
                     <li><i class="fas fa-calendar-alt"></i>Access 24/7</li>
                     <li><i class="fas fa-cloud-upload-alt"></i>Upload any type of file</li>
                  </ul>
               </div>
               <div class="card-footer">
                  <button type="button" class="btn btn-outline-primary">Get plan!</button>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 text-center">
            <div class="card mb-4">
               <div class="card-header">
                  <h4 class="my-0 font-weight-normal">Annual</h4>
               </div>
               <div class="card-body">
                  <h1 class="card-title pricing-card-title">
                     $1500 <small class="text-muted">year</small>
                  </h1>
                  <ul class="list-unstyled mt-3 mb-4">
                     <li><i class="fas fa-dollar-sign"></i>60% off</li>
                     <li><i class="fas fa-user-circle"></i>Multiple sessions</li>
                     <li><i class="fas fa-hdd"></i>5000 GB for storaging</li>
                     <li><i class="fas fa-headset"></i>Technical support</li>
                     <li><i class="fas fa-calendar-alt"></i>Access 24/7</li>
                     <li><i class="fas fa-cloud-upload-alt"></i>Upload any type of file</li>
                  </ul>
               </div>
               <div class="card-footer">
                  <button type="button" class="btn btn-outline-primary">Get plan!</button>
               </div>
            </div>
         </div>

      </div>
   </div>

   <div class="row mt-5 pt-3 mb-5">

      <div class="col-lg-4 text-center">
         <img src="{{ asset('img/friendly.png') }}" class="img-fluid" width="70">
         <h5 class="mt-5 feature-text">Friendly interface.</h5>
      </div>

      <div class="col-lg-4 text-center">
         <img src="{{ asset('img/storage.png') }}" class="img-fluid" width="70">
         <h5 class="mt-5 feature-text">Safe storage</h5>
      </div>

      <div class="col-lg-4 text-center">
         <img src="{{ asset('img/support.png') }}" class="img-fluid" width="70">
         <h5 class="mt-5 feature-text">Technical support.</h5>
      </div>

   </div>
</div>
<!--/More-->
@endsection