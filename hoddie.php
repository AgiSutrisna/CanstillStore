<?php 
//koneksi
  $koneksi = new mysqli("localhost","root","","canstore");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link href="../tugaspbo/admin/assets/fontawesome-free-5.15.2-web/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>CanStillStore</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href = "index.html"><img src="../tugaspbo/img/LOGO.jpg"></a>
            <div class="items">
                <ul class ="item" >
                   <li><a href="home.html" class ="menu">Home</a></li> 
                   <li><a href="#" class ="menu">Product</a>
                    <ul class ="drop">
                        <li><a href="shirt.php">Shirt</a></li>
                        <li><a href="tshirt.php">T-Shirt</a></li>
                        <li><a href="hoddie.php">Hoddie</a></li>
                        <li><a href="pants.php">Pants</a></li>
                    </ul>
                </li> 
                   <li><a href="howtobuy.html" class ="menu">How To Buy</a></li> 
                   <li><a href="order.php" class ="menu">Order</a></li>
                </ul>
                <div class="menu-toggle">
                    <input type ="checkbox"/>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
<main>
            <section class = "konten">
    		<h1 style="text-align: center; ">Hoddie</h1>
            <div class = "gambar">
                <?php $ambil=$koneksi->query("SELECT * FROM produk WHERE idkategori = 3"); ?>
    			<?php while($perproduk = $ambil->fetch_assoc()){ ?>
                    <div class="cal-md-4" style="padding-top:50px">
                        <div class="foto"> 
    					<img src="img/<?php echo $perproduk['foto_produk']; ?>" alt="">
                        <div class = "caption">
    						<h3><?php echo $perproduk['nama_produk']; ?></h3>
    						<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
    						<a href="order.php" class="btn btn-primary">Order</a>
    					</div>
    				</div>
    			</div>
    		<?php } ?>
    	</div>
    </div>
    </section>
    </main>  
    <footer class="footer">
            <div class = "footer-left">
                <h3> About us</h3>
                    <p>Canstill Store Is Local Product From Bandung</p>
                    <div class="social">
                        <a href="https://www.facebook.com/aditya.i.s.98/"><span class="fab fa-facebook-f"></span></a>
                        <a href="https://www.instagram.com/canst_store/"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>

            <div class ="footer-center">
                <h3>Adresss</h3>
                    <ul class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Jln Gagak Cibeunying Kota Bandung Jawa Barat</span>
                    
                    <ul class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">08977735357</span>
                   
                    <ul class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">canstillstore@gmail.com</span>
                    </ul>
                </div>

            <div class="payment">
                <h3>Pilihan Pembayaran</h3>
                <br>
                    <div class="mandiri">
                        <img src="../tugaspbo/img/mandiri-gxa.png">
                        <img src="../tugaspbo/img/bni-gxa.png">
                        <img src="../tugaspbo/img/gopay-gxa.png">
                        <img src="../tugaspbo/img/ovo-gxa.png">
                </div>
            </div>
            <div class = "footer-bottom">
                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>,Canstill Store</p>
            </div>
    </footer>
</body>
</html>