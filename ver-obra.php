<?php
include("header.php");
$id = $_GET['id'];
if(!is_numeric($id)) {
    echo"<script type='text/javascript'>";
	echo"alert('Tente novamente');" ;
	echo"window.location = 'index.php';";
	echo"</script>";
}
	
$trab = $dbh->prepare("select * from artigos where artigo_id = $id;");
$trab->execute();
$dadosTrab = $trab->fetch(PDO::FETCH_ASSOC);
?>


  <!-- ======= Hero Section ======= -->
  <section id="home" class="hero" style='background-color:#4d8232'>
    <div class="container"  >
        <div class="col-lg-12 text-center ">
          <h2>Obras</h2>
        </div>
    </div>



    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="sobre" class="about">
      <div class="container" data-aos="fade-up">

        
        <div class="row gy-4">
          <div class="col-lg-6">
            <h2 style='color:#4D8232!important;font-size:40px!important;font-weight:bold!important'><?php echo utf8_encode($dadosTrab['titulo'])?> - <?php echo utf8_encode($dadosTrab['cidade'])?></h2>
			<hr>
			<br>
			<span style='color: #595959!important;font-weight: 500!important;text-align:justify!important;font-size:24px!important'>
			<?php echo$dadosTrab['materia']?>
			</span>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
			<h2 style='color:#4D8232!important;font-size:40px!important;font-weight:bold!important'>HAVANS solar</h2>
			
			<br>
			
			<img src="assets/fotos_artigos/<?php echo$dadosTrab['caminho_imagem']?>" class="img-fluid" alt="">
			
			<!--	
              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
			  -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">



      </div>
    </section><!-- End Clients Section -->





<?php
include("footer.php");
?>

</body>

</html>