@extends('layouts.layout')

@section('form-register');
  <section id="register">
    <h3 style="text-align: center;">Registration form</h3>
    <div class="form-container">
      <form action="/register" method="POST" >
        @csrf

        <div id="form_data" class="mb-3">
        <label for="fname" class="form-label">Firstname</label>
        <input type="text" id="fname" name="name" class="form-control" >
        </div>


         
         <div id="form_data" class="mb-3">
        <label for="Email" class="form-label">Email address</label>
        <input type="email" id="email" name="email" class="form-control" >
        <div class="form-text">We wont share your Email address </div>
        </div>

         <div id="form_data" class="mb-3">
        <label for="passwd" class="form-label">Password</label>
        <input type="password" id="passwd" name="password" class="form-control"  >
        </div>


          <button id="submit" class="btn btn-primary">register </button>

      </form>
    </div>
  </section>

@endsection


