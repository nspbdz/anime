<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/master.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/master.css') !!}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>al</title>
</head>
<style>
  .card {}

  @media screen and (max-width: 600px) {
    .card {
      width: 100%;
      display: block;
      margin-bottom: 20px;
    }
  }
</style>

<body>

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
          <a class="nav-link" href="#">Anime </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Popular Anime </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> Jadwal Anime</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="container-fluid">
    <?php
    $data = file_get_contents('data/pizza.json');
    $menu = json_decode($data, true);

    // var_dump($menu) 

    $menu = $menu["menu"];
    // echo $menu[0]["nama"];
    ?>
  </div>


  <div class="container">
    <div class="row">
      <!-- <div class="col-md-9">    -->
      <?php foreach ($menu as $row) :  ?>
      <div class="col-md-2 col-6">
        <a href="detail.php?nama=<?= $row["nama"]; ?>&id=<?= $row["id"]; ?>&id=<?= $row["id"]; ?>">

          <div class="card mb-3  w-100%" style="background: url('img/pizza/<?= $row["gambar"]; ?>');background-size:cover;background-repeat:no-repeat;width:140px;height:140px;" sizes="(max-width: 70px) 90vw, 90px">
            <!-- width="106" height="150"  -->

            <!-- <img  src="img/pizza/<?= $row["gambar"]; ?>"  212w" sizes="(max-width: 106px) 100vw, 106px"> -->

            <h5 class="card-title w-50  pl-1 py-2" style="background: rgb(0, 0, 0, 0.5);color:white;font-size:10px;"> <?= $row["episode"]; ?></h5>
            <h6 class="card-footer w-50 ml-auto" style="background: rgb(0, 0, 0, 0.5);color:white;font-size:8px;"> <?= $row["update"]; ?></h6>
            <div class="overlay">
              <p><?= $row["nama"]; ?></p>

        </a>

        <!-- <img   src="img/pizza/<?= $row["gambar"]; ?>"   >  -->
        <!-- <h5><?= $row["nama"]; ?></h5> -->

        <!-- <div 
    <h5 ><?= $row["nama"]; ?></h5>
    <p> <?= $row["deskripsi"]; ?></p>
    <h5 >Rp.<?= $row["harga"]; ?></h5>

  </div> -->
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <br>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>