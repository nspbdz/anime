<!-- <?php 
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data,true);

// var_dump($menu) 

$menu = $menu["menu"];
// echo $menu[0]["nama"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/master.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Anime List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Popular Anime </a>
      </li>      <li class="nav-item">
        <a class="nav-link" href="#"> Jadwal Anime</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background:#343A40;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>

</head>



</body>
</html>


  </head>

  <div class="container">

<div class="row">

<div class="col">

<h1>all menu</h1>

</div>


<div class="row" >
  <?php foreach ($menu as $row) : ?>
            <div class="col-md-3 col-6">
            <div class="card mb-3">
    
  
  

   <img   src="img/pizza/<?= $row["gambar"];?>"   widht="200px">

  <!-- <div 
    <h5 ><?= $row["nama"];?></h5>
    <p> <?= $row["deskripsi"];?></p>
    <h5 >Rp.<?= $row["harga"];?></h5>

  </div> -->
</div>
</div>
<?php  endforeach; ?>
<!-- 
<div class="row" >
  <?php foreach ($menu as $row) : ?>
            <div class="col-md-3 col-6">
            <div class="card mb-3">
    
  
  

   <img class="card-img-top"  src="img/pizza/<?= $row["gambar"];?>"  alt="Card image cap" widht="200px">

  <div class="card-body">
    <h5 class="card-title"><?= $row["nama"];?></h5>
    <p class="card-text"><?= $row["deskripsi"];?></p>
    <h5 class="card-title">Rp.<?= $row["harga"];?></h5>

    <a href="#" class="btn btn-primary">pesan sekarang</a>
  </div>
</div>
</div>
<?php  endforeach; ?> -->

    
        </div>

            </div>




</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<!-- 
<div class="row">
<?php foreach ($menu as $row) : ?>
  
<div class="col-md-4">
<div class="card mb-3" >
  

   <img class="card-img-top"  src="img/pizza/<?= $row["gambar"];?>" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title"><?= $row["nama"];?></h5>
    <p class="card-text"><?= $row["deskripsi"];?></p>
    <h5 class="card-title">Rp.<?= $row["harga"];?></h5>

    <a href="#" class="btn btn-primary">pesan sekarang</a>
  </div>
</div>
</div>
<?php  endforeach; ?>

</div> --> -->
