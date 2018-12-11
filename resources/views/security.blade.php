@extends('layouts.app')

@section('content')

<!--Main section / Jumbotron-->
<main role="main">
   <section class="jumbotron bg-secure text-center mb-0 d-flex flex-row justify-content-center align-items-center">
      <div class="pt-5 bg-secure">

         <div class="col-lg-12">
            <h5 class="title-home pt-5 ml-5">
               We are commited <br>
               with your <b>Security</b>
            </h5>
            <div class="container">
               <img src="{{ asset('img/secure.jpg') }}" class="img-fluid" width="60%">
            </div>
         </div>

      </div>
   </section>
</main>
<!--/Main section / Jumbotron-->

<!--Content-->
<div class="container">
   <div class="d-flex flex-row justify-content-center align-items-center">
      <div class="mt-5">
         <div class="row">
            
            <div class="col-sm-12 text-center" style="margin-bottom: 100px;">
               <h5 class="title-home">We are commited with your security</h5>
            </div>

            <div class="col-sm-12 col-md-6 text-center my-auto shadow">
               <img src="{{ asset('img/key.jpg') }}" class="img-fluid ">
            </div>

            <div class="col-sm-12 col-md-6 text-center">
               <h5 class="title-home">Privacy, autonomy and security.</h5>
               <p class="pt-4 subtitle-home">Every user registered on our platform will have access to its files only. With this, we guarantee that only <b>you</b> can view your files.</p>
               <p class="pt-4 subtitle-home">In case our system reports suspicious activity in your account, we must intervene to guarantee <b>Sky</b> to be a safe space for all our costumers.</p>
            </div>

            <div class="col-sm-12 col-md-6 text-center mt-5">
               <h5 class="title-home">Everything you need in the same place.</h5>
               <p class="pt-4 subtitle-home">Our minimalist design allows you to find everything easily in one click. Interact with all the visual elements with our friendly interface.</p>
            </div>

            <div class="col-sm-12 col-md-6 text-center my-auto mt-5">
               <img src="{{ asset('img/chart.jpg') }}" class="img-fluid">
            </div>


         </div>
      </div>
   </div>
</div>
<!--/Content-->

@endsection