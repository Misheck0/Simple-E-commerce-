@extends('layouts.header')

@section('home_header')
 <div class="home_header">
  <div class="style">
    <ul>
      <li> <a href="#">Home</a></li>
      
      <li> <a href="#product">Product</a></li>
      
      <li> <a href="/login_form">login</a></li>
      <li> <a href="/re">Register</a> </li>
      <li>
    <select>
    <option> <a href="templete/Logout.php"> Log out </a> </option>
    <option> Login </option>
    </select>
    </ul>
    
    
  </div>
    
      
</div>
<hr> 

<div class="product_grid">
@foreach($phones as $phone)
 <div class="phone_image" >
 <img id="img" src=" {{ $phone->image_url }}" alt=" {{ $phone->phone_name }}">


<div class="price">
 {{ $phone->price }}
  </div>
<div id="storage">
  {{ $phone->storage }}
</div>
</div>
@endforeach

</div>




@endsection
