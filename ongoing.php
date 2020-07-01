<?= include('header.php') ?>

    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg spad" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h3><span>On Going Anime</span></h3>
                    <div class="bt-option">
                        <a href="/">Home</a>
                        <span>On Going</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                <?php
    $data = file_get_contents('data/pizza.json');
    $menu = json_decode($data, true);

    // var_dump($menu) 

    $menu = $menu["menu"];
    // echo $menu[0]["nama"];
    ?>

<!-- Categories Grid Section Begin -->
<section class="categories-grid-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-0">
              <div class="row">

                <?= 
            $i=0; 

                 foreach ($menu as $row) {
                    if($i==2) break;
                 
                 
                 ?>

                <a href="detail.php?id=<?= $i; ?>">
              <div class="col-lg-6">
                  <div class="cg-item">

                        <img src="img/pizza/<?= $row["gambar"]; ?>" alt="">

                      </a>

                            <!-- <div class="cg-pic set-bg" data-setbg="img/categories-grid/cg-1.jpg"> -->
                            </div>
                            <div class="cg-text">
                                <h5><a href="#"><?= $row[ 'nama']?></a></h5>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <?= $row[ 'tanggalupload']?></li>
                                </ul>
                  <br>
                            </div>
                        </div>
                    </div>
                        
                         <?= $i++; } ?>       
  
                                  <div class="pagination-item">
                    <a href="#"><span>1</span></a>
                    <a href="#"><span>2</span></a>
                    <a href="#"><span>3</span></a>
                    <a href="#"><span>Next</span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="sidebar-option">
                    <div class="row">
                        <div class="col-md-12">
                        <x-partials.chatango/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Grid Section End -->

<?= include('footer.php') ?>