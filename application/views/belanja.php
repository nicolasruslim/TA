<!DOCTYPE html>
<html>
<head>
	<title>Belanja Harian</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/css/style.css' ?>" />
</head>
<body>
	<div id="navbar">
		<ul id="navigasi">
      <li class="default">
          Belanja
          <ul class="belanja">
              <a href="<?php echo base_url().'index.php/c_main/belanja/1' ?>"><li><p class='product-type'>Buah</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/belanja/2' ?>"><li><p class='product-type'>Sayur dan Umbi</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/belanja/3'?>"><li><p class='product-type'>Daging</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/belanja/4'?>"><li><p class='product-type'>Telur</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/belanja/5'?>"><li><p class='product-type'>Makanan</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/belanja/6'?>"><li><p class='product-type'>Minuman</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/belanja/7'?>"><li><p class='product-type'>Bacaan</p></li></a>
          </ul>
        </li>
        <li>
          Resep
          <ul class="resep">
              <a href="<?php echo base_url().'index.php/c_main/daftar_resep/1' ?>"><li><p class='product-type'>Seafood</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/daftar_resep/2' ?>"><li><p class='product-type'>Sup</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/daftar_resep/3'?>"><li><p class='product-type'>Ayam</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/daftar_resep/4'?>"><li><p class='product-type'>Daging</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/daftar_resep/5'?>"><li><p class='product-type'>Dessert</p></li></a>
              <a href="<?php echo base_url().'index.php/c_main/daftar_resep/6'?>"><li><p class='product-type'>Minuman</p></li></a>
          </ul>
        </li>
        <li><a href="">Cara Belanja</a></li>
        <li><a href="">Tentang Kami</a></li>
        <li><a href="">Kontak</a></li>
    </ul>
	</div>
	<div id="container">
        <ul class="products">
            <?php foreach($products as $product) { ?>
            <li>
                <a href="#">
                    <img src="<?php echo base_url().'/assets/images/'.$product->product_image.'.jpg';?>">
                    <h4><?php echo $product->product_name;?></h4>
                      <?php 
                        $options = array();
                        foreach($product_size_price as $psp) {
                            if ($psp->product_id == $product->product_id){ 
                                  $options[$psp->product_size] = $psp->product_size."&nbsp;".$psp->product_price ;
                            }
                          } 
                        echo form_dropdown('size_price', $options);
                      ?>
                </a>
            </li>
            <?php } ?>
        </ul>
	</div>
</body>
</html>