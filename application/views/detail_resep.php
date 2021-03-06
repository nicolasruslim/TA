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
    			Resep
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
        <img src="<?php echo base_url().'/assets/images/recipes/'.$recipe->recipe_image.'.jpg';?>">
        <h4><?php echo $recipe->recipe_name;?></h4> 
        <p><?php echo $recipe->recipe_description;?></p>
        <p><?php echo $recipe->recipe_howto;?></p>
        <ul>
          <?php foreach($recipe_composition as $composition) { ?>
            <li>
              <p><?php echo $composition->recipe_composition_amount."&nbsp;".$composition->composition_name;?></p>
            </li>
          <?php } ?>
        </ul>

        <h3>Beli Bahan untuk Resep Ini</h3>
	</div>
</body>
</html>