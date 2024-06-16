<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Simple testing site</title>
  
  <!-- HTML -->
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  


  <!-- Custom Styles -->
  <link rel="stylesheet" href="Include/index.css">
 <!-- include jquery -->
    <script src="Include/jquery-3.7.1.min.js"></script>
    <script src="main.js"></script>
    
      <style>
  .home_header{
    font-family: Arial, Helvetica, sans-serif;
    
    margin:0%;
    
    text-align: right;
    
  }
  .style ul li{
    padding:1%;
    list-style-type: none;
    display:inline;
    
  }
  /* remove link boader line*/
  .home_header ul li a{
    font-weight:bold; /* change font text */
    color:blue;
    text-decoration: none;
    
    
  }

.product_grid{
  display: grid;
  grid-template-columns: repeat(2,1fr);
  grid-template-rows: repeat(2,1fr);
  grid-gap: 10px;
  
  
}

.phone_image #img{
  width:25rem;
  padding:5px;
  box-shadow:0 0 15px rgba(0,0,0,0,3);
  height: 20rem;
  cursor: pointer;
  object-fit: cover;
}
body{
  background-color:#ffffff;
}
#storage,.price,.buy,.p_name{
  text-align: center;
}
.car_image{
 height:25rem;
  margin: 0%;
  padding:0%;
  background-color: whitesmoke;
  
}
.price {
  font-weight: bold;
  
}






  </style>
</head>

<body>

@yield('home_header')


</body>

</html>
