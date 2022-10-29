<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Meet Felic</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="home"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="home">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="experiences">Experiences</a></li> 
								<li class="nav-item"><a class="nav-link" href="achievements">Achievements</a></li> 
								<li class="nav-item"><a class="nav-link" href="gallery">Gallery</a></li> 
								<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                                <li class="nav-item active"><a class="nav-link" href="tampilkrs">Lihat KRS</a></li>
								<li class="nav-item"><a class="nav-link" href="app">Lihat KHS</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Lihat KRS</h2>
							<div class="page_link">
								<a href="home">Home</a>
								<a href="experiences">Lihat KRS</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
         <!--================KRS Area =================-->
         <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
					<div class="welcome_text">
						<h4>KRS Information</h4>
					</div>
					<table class="table table-borderless">
						<tbody>
						  <tr>
							<?php
							$nama = DB::table('mahasiswa')
							->where('ID_mahasiswa', '1001')
							->value('Nama');

							echo "<td><p>Nama</p></td>";
							echo "<td><p>".$nama."</p></td>";
							?>

						  <tr>
							<?php
							$studentid = DB::table('mahasiswa')
							->where('ID_mahasiswa', '1001')
							->value('StudentID');
		
							echo "<td><p>Student ID</p></td>";
							echo "<td><p>".$studentid."</p></td>";
							?>
						  </tr>

						  <tr>
							<?php
							$term = DB::table('term')
							->where('ID_term', '3')
							->value('kode_term');
					
							echo "<td><p>Term</p></td>";
							echo "<td><p>".$term."</p></td>";
							?>
						  </tr>

						  <tr>
							<?php
							$total=0;
							$id=1;
							while($id<7){                    
								$temp = $total + DB::table('matakuliah')->where('id_matakuliah',$id)->value('sks');
								$total = $temp;
								$id++;
							}
							echo "<td><p>Total SKS</p></td>";
							echo "<td><p>".$total."</p></td>";
						?>
						  </tr>

						</tbody>
					</table>
					<table class="table table-hover">
						<thead class="thead-dark">
							<tr>
							<th scope="col">No</th>
							<th scope="col">Kode Mata Kuliah</th>
							<th scope="col">Nama Mata Kuliah</th>
							<th scope="col">SKS</th>
						  </tr>
						</thead>
						<tbody>
						<?php
                        $no=1;
                        while ($no<4) {
                            
                            $kodematakuliah = DB::table('matakuliah')
                            ->where('id_matakuliah', $no)
                            ->value('kode_matakuliah');

                            $namamatakuliah = DB::table('matakuliah')
                            ->where('id_matakuliah', $no)
                            ->value('nama_matakuliah');

                            $sks = DB::table('matakuliah')
                            ->where('id_matakuliah', $no)
                            ->value('sks');

                            echo "<tr>";
                            echo "<td>".$no."</td>";                        
                            echo "<td>".$kodematakuliah."</td>";
                            echo "<td>".$namamatakuliah."</td>";
                            echo "<td style='text-align:left'>".$sks."</td>";
                            echo "</tr>";

                            $no++;
                        }  
						
                    ?>
					</tbody>
					</table>

        		</div>
        	</div>
        </section>
        <!--================End KRS Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Me</h3>
        					</div>
        					<p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Me</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        						<li><a href="#"><i class="fa fa-behance"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>