<?php
include("header.php");
?>


  <!-- ======= Hero Section ======= -->
  <section id="home" class="hero" style='background-color:#4d8232'>
    <div class="container"  >
        <div class="col-lg-12 text-center ">
          <h2>Serviços</h2>
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
            <h2 style='color:#4D8232!important;font-size:40px!important;font-weight:bold!important'>Instalação de usina fotovoltaica</h2>
			<hr>
			<br>
            <p style='color: #595959!important;font-weight: 500!important;text-align:justify!important;font-size:24px!important'>
			Instalando sua usina solar com a HAVANS SOLAR, você economiza em até 99% dos gastos com energia elétrica, aumentando os lucros, tornando sua residência ou empresa sustentável, cooperando com o meio ambiente, dentre muito outros benefícios que a HAVANS SOLAR pode proporcionar ao seu cliente.
			<bR>
			<bR>
			Reduza a sua conta de energia em até 99% com Energia solar!
			<bR>
			<br>
			Parcelamento em 72 vezes
			<bR>
			<bR>
			 <a type="button" class="btn btn-success" href='https://wa.me/5533999662708' target='_blank' style='background-color:#4d8232;font-size:20px'>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
				<path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
				</svg> 
				Entre em contato pelo nosso	WhatsApp			
			</a>
			 <a type="button" href='https://wa.me/5533999662708' target='_blank' >
			<span style='color:#e14415!important;font-size:30px!important'>  (33) 99966-2708</span>
			</a>

			</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
			<br>
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
									<option value="Orçamento de instalação usina solar">Orçamento de instalação usina solar</option>
									
									
							</select>
                </div>
				
				 <div class="col-md-6 form-group">
                   <input type="hidden" name="quantidade" id="quantidade" value=0 >
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
                  <select name="tipo_telhado" id="tipo_telhado" class="form-control" required="required" aria-required="true" >
									<option value="0">Escolher tipo de telhado</option>
									<option value="Colonial">Colonial</option>
									<option value="Zinco">Zinco</option>
									<option value="Fribocimento">Fribocimento</option>
									<option value="Solo">Solo</option>
							</select>
                </div>
				
              </div>
				<div class="row"> <br> </div>
              <div class="text-center"><p id='enviar' style='font-family: var(--font-primary); font-weight: 500;font-size: 15px;letter-spacing: 1px;display: inline-block;padding: 14px 40px;border-radius: 50px;transition: 0.3s;color: #fff;background: #e14415;box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);border: 2px solid rgba(255, 255, 255, 0.1);' class='btn-get-started'>Enviar Mensagem</p></div>
            </form>

			
			
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