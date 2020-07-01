
<?php include('header.php') ?>

<body>
 
    <?php
    $data = file_get_contents('data/pizza.json');
    $menu = json_decode($data, true);
    $dataKe = $_GET["id"];
    // var_dump($menu) 

    $menu = $menu["menu"][$dataKe];
    // echo $menu[0]["nama"];
    ?>
    
    <!-- Details Hero Section Begin -->
    <section class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <img src="img/pizza/<?= $menu['gambar']; ?>" class="img-fluid">
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="details-hero-text">
                    <div class="label"><span><?= $menu["kategori"]; ?></span></div>
                    <div class="label"><span><?= $menu["status"]; ?></span></div>
                    <h3>
    <li><?= $menu["nama"]; ?>

                    </h3>
                    <ul>
                        <li>by <span>Admin</span></li>
 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Details Hero Section End -->

<!-- Details Post Section Begin -->
<section class="details-post-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-0">
                <div class="details-text">
                    <div class="dt-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    </div>

                    <div class="dt-share">
                        <div class="ds-links">
                            <div class="ds-title">Download</div>
                            <?php 
                            $episode = $menu['episode'];
                            for($i=0;$i<sizeof($episode);$i++) { ?>
                            <a href="<?= $episode[$i]; ?>">
                            <?= $i+1; ?>
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
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
</body>
<?= include('footer.php') ?>
