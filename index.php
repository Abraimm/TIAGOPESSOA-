<?php
include("header.php");

$sth = $dbh->prepare("select * from artigos order by artigo_id asc");
$sth->execute();
										
											

?>

  <!-- ======= Hero Section ======= -->
  <section id="home" class="hero" style='background-color:#4d8232'>
    <div class="container position-relative"  >
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>O que adianta instalar e não fazer a manutenção?</h2>
          <p style='font-weight:bold'>Descubra a importância da manutenção preventiva dos equipamentos e da limpeza dos painéis solares com mão de obra especializada e equipamentos técnico.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#servicos" class="btn-get-started">Nossos serviços</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" style='border-radius: 30px;background-color:#fff!important;padding:5px!important'>
           <form action="contato.php" method="post" id='form'>
			<div class="row" style='text-align:center!important'>
                <div class="col-md-12 form-group">
				<h2 style='color:#4D8232!important;font-size:32px!important'>Solicitar um orçamento</h2>
				</div>
			</div>
			  <div class="row">
			                
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                </div>
				 <div class="col-md-6 form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
				
              </div>
	
			  <div class="row"> <br> </div>

			  <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone" required>
                </div>
				<div class="col-md-6 form-group">
                  <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade" required>
                </div>
              </div>
			  <div class="row"> <br> </div>
			  <div class="row">
                
				<div class="col-md-6 form-group">
                  <select name="servico" id="servico" class="form-control" required="required" aria-required="true">
									<option value="0">Escolher Serviço</option>
									<option value="Manutenção de Placas Solar">Manutenção de Placas Solar</option>
									<option value="Orçamento de instalação usina solar">Orçamento de instalação usina solar</option>
									<option value="Consultório e Pericia">Consultória e Pericia</option>
									<option value="Monitoramento de Inversores">Monitoramento de Inversores</option>
									<option value="Garantia de inversores">Garantia de inversores</option>
									<option value="Manutenção de aquecedor sola">Manutenção de aquecedor solar</option>
									
									
									
							</select>
                </div>
				
				 <div class="col-md-6 form-group">
                  <input type="number" name="quantidade" class="form-control" id="quantidade" placeholder="Quantidade de placas" >
                </div>
              </div>
			  <div class="row"> <br> </div>
			  <div class="row">
			 
                <div class="col-md-6 form-group">
                  <select name="area_atuacao" id="area_atuacao" class="form-control" required="required" aria-required="true">
									<option value="0">Escolher Área de Atuação</option>
									<option value="Integrador">Integrador</option>
									<option value="Distribuidor">Distribuidor</option>
									<option value="Dono de usina">Dono de usina</option>
									
									
									
							</select>
                </div>
				
				<div class="col-md-6 form-group">
                  <select name="tipo_telhado" id="tipo_telhado" class="form-control" required="required" aria-required="true" style='display:none'>
									<option value="0">Escolher tipo de telhado</option>
									<option value="Colonial">Colonial</option>
									<option value="Zinco">Zinco</option>
									<option value="Fribocimento">Fribocimento</option>
									<option value="Solo">Solo</option>
							</select>
                </div>
				
              </div>
				<div class="row"> <br> </div>
              <div class="text-center"><p id='enviar' class='btn-get-started'>Enviar Mensagem</p></div>
            </form>
        </div>
      </div>
    </div>

	    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="sobre" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
			<h2 style='color:#4D8232!important;font-size:50px!important;font-weight:bold!important'>Havans Solar</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            
            <img src="assets/img/manutencao.jpg" style='width:75%!important' class="img-fluid rounded-4 mb-4" alt="">
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="" style='font-size:24px!important'>
                Somos uma empresa especializada em limpeza de painéis fotovoltaicos e manutenção preventiva.
				<br>
				<br>
				Desenvolvedores de uma tecnologia exclusiva para aumento da performance da usina solar, fazemos seu investimento não se tornar um prejuízo.
              </p>
			  <br>
				<a href="#about" class="btn-get-started" style='    font-weight: 500; font-size: 15px;letter-spacing: 1px;display: inline-block; padding: 14px 40px;border-radius: 50px;transition: 0.3s;color: #fff;background: #e14415;'>Saiba Mais</a>
     
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

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter" style='background-color:#4d8232'>
      <div class="container" data-aos="fade-up">

		
		<div class="row gy-4" style='color:#fff'>	
			<div class="col-lg-4">
			<div class="counter">
			  <h2 style='font-size:50px!important;padding-top:5px!important;text-align:center;font-weight:bold!important' class="timer count-title count-number plus-sign" data-to="500000" data-speed="1500"></h2>
			   <p class="count-text " style='font-size:34px!important;padding-top:5px!important;text-align:center;font-weight:bold!important'>Painéis Limpos</p>
			</div>
			</div>
			
			<div class="col-lg-4">
			<div class="counter">
			  <h2 style='font-size:50px!important;padding-top:5px!important;text-align:center;font-weight:bold!important' class="timer count-title count-number plus-sign currency-sign" data-to="5600000" data-speed="1500"></h2>
			   <p class="count-text " style='font-size:34px!important;padding-top:5px!important;text-align:center;font-weight:bold!important'>Economia Gerada</p>
			</div>
			</div>
			
			<div class="col-lg-4">
			<div class="counter">
			  <h2 style='font-size:50px!important;padding-top:5px!important;text-align:center;font-weight:bold!important' class="timer count-title count-number plus-sign" data-to="6001680" data-speed="1500"></h2>
			   <p class="count-text " style='font-size:34px!important;padding-top:5px!important;text-align:center;font-weight:bold!important'>MWh/ano</p>
			</div>
			</div>


        </div>
		</div>

      </div>
    </section><!-- End Stats Counter Section -->



    <!-- ======= Our Services Section ======= -->
    <section id="servicos" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nossos serviços</h2>
          <p>Confira nossos serviços!</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <h3 style='color:#4d8232;font-size:27px'>Manutenção de Placas Solar</h3>
              <p style='font-size:20px;color:##595959'>Manutenção Preventiva e corretiva.</p>
			  <br>
			  <img src="assets/img/manutencao.jpg" class="img-fluid" alt="">
			   <br>
			   <br>
			   <a href="manutencao-placa-solar.php" class="btn btn-success" style='background-color:#4d8232;font-size:20px'>Confira</a>
            </div>
          </div><!-- End Service Item -->
			<div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <h3 style='color:#4d8232;font-size:27px'>Instalação de usinas fotovoltaica</h3>
              <p style='font-size:20px;color:##595959'>Parcelamento em 72 meses.</p>
			  <br>
			  <img src="assets/img/usina-foto.jpg" class="img-fluid" alt="">
			   <br>
				<br>				
				 <a href="usina-foto.php" class="btn btn-success" style='background-color:#4d8232;font-size:20px'>Confira</a>
            </div>
          </div><!-- End Service Item -->
		  
          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <h3 style='color:#4d8232;font-size:27px'>Consultória e perícia</h3>
              <p style='font-size:20px;color:##595959'>Cuidamos de todo o processo de laudo.</p>
			  <br>
			  <img src="assets/img/consultorio-pericia.jpg" class="img-fluid" alt="">
			   <br>
			    <br>
				<a href="consulta-pericia.php" class="btn btn-success" style='background-color:#4d8232;font-size:20px'>Confira</a>
            </div>
          </div><!-- End Service Item -->
		  
		  
		  </div>
		  
		  <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          

        </div>
      </div>
    </div>
	
		  <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
		  
		   <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <h3 style='color:#4d8232;font-size:27px'>Monitoramento de inversores</h3>
              <p style='font-size:20px;color:##595959'>Monitoramos o seu equipamento.</p>
			  <br>
			  <img src="assets/img/monitoramento.webp" class="img-fluid" alt="">
			   <br>
			    <br>
			 <a href="monitoramento-de-inversores.php" class="btn btn-success" style='background-color:#4d8232;font-size:20px'>Confira</a>
            </div>
          </div><!-- End Service Item -->
		  <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <h3 style='color:#4d8232;font-size:27px'>Garantia para equipamentos inversores</h3>
              <p style='font-size:20px;color:##595959'>Requerimento de garantia de inversores.</p>
			  <br>
			  <img src="assets/img/equipamento.jpg" class="img-fluid" alt="">
			   <br>
			    <br>
			 <a href="garantia.php" class="btn btn-success" style='background-color:#4d8232;font-size:20px'>Confira</a>
            </div>
          </div><!-- End Service Item -->
		   
		  <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <h3 style='color:#4d8232;font-size:27px'>Manutenção de aquecedor solar</h3>
              <p style='font-size:20px;color:##595959'>Manutenção do seu Equipamento.</p>
			  <br>
			  <img src="assets/img/manutencao-de-aquecedor-solar.jpg" class="img-fluid" alt="">
			   <br>
				<br>				
				 <a href="usina-foto.php" class="btn btn-success" style='background-color:#4d8232;font-size:20px'>Confira</a>
            </div>
          </div><!-- End Service Item -->
		  
		  </div>

         

        

      </div>
    </section><!-- End Our Services Section -->

<!-- ======= Hero Section ======= -->
  <section class="hero" style='background-color:#4d8232'>
    <div class="container position-relative"  >
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2 style='text-align:center;font-size:50px'>Manutenção de Placas <br> Solares é aqui na Havans!</h2>
          <p style='text-align:center;font-weight:bold;font-size:24px!important'>Entre em contato agora sem compromisso!</p>
          <div class="" style='text-align:center'>
            <a href="#home" class="btn-get-started">Contatos</a>
          </div>
        </div>
        
      </div>
    </div>

	    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->
	
	
    <!-- ======= Our Services Section ======= -->
    <section id="obras" class="obras sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nossas obras e convênios</h2>
          <p>Confira nossas obras e convênios!</p>
        </div>
		<div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
		<?php
			$result = $sth->fetchAll();
			foreach($result as $res){											
				$artigo_id = ($res['artigo_id']);
				$titulo = utf8_encode($res['titulo']);
				$cidade = utf8_encode($res['cidade']);
				$caminho_imagem = $res['caminho_imagem'];
				
		?>

        

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <h3 style='color:#4d8232;font-size:27px'><?php echo$titulo?></h3>
              <p style='font-size:20px;color:##595959'><?php echo$cidade?></p>
			  <br>
			  <img src="assets/fotos_artigos/<?php echo$caminho_imagem?>" class="img-fluid" alt="">
			  <br>
			  <br>
			  <a href="ver-obra.php?id=<?php echo$artigo_id?>" class="btn btn-success" style='background-color:#4d8232;font-size:20px'>Confira</a>
            </div>
          </div>

		
		<?php
			}
		?>
		        </div>

      </div>
    </section><!-- End Our Services Section -->


<?php
include("footer.php");
?>

</body>

</html>