@extends('layouts.layout')

@section('form-register')
  <section id="register">
    <h3 style="text-align: center;">Login ...</h3>
    <div class="form-container">
      <form action="/login" method="POST" >
        @csrf

        <div id="form_data" class="mb-3">
        <label for="fname" class="form-label">Email</label>
        <input type="text" id="email" name="email" class="form-control">
        </div>



         <div id="form_data" class="mb-3">
        <label for="Email" class="form-label">Passowrd</label>
        <input type="password" id="email" name="password" class="form-control">
       
 <input type="submit" value="submit" class="btn btn-primary">
        </div>

</section>
@endsection
