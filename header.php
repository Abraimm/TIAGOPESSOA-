<?php
$server = $_SERVER['SERVER_NAME']; 
if(strpos("[".$server."]", "localhost")) {
	$dbh = new PDO('mysql:host=localhost;dbname=havan_site', 'root', '', array(PDO::ATTR_PERSISTENT => false));
}else {
	$dbh = new PDO('mysql:host=localhost;dbname=havanssolar_site2', 'havanssolar_user_total', 'Ceasc201!', array(PDO::ATTR_PERSISTENT => false));
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Havans Solar - Limpeza de painéis fotovoltaicos</title>
	<meta name="description" content="Manutencao de Placas Solar;Instalacao de usinas fotovoltaica;Consultória e perícia;Monitoramento de inversores;Garantia para equipamentos inversores;Manutencao de aquecedor solar;Agende sua consulta: Whats: 33-99966-2708;Teofilo Otoni;Campanario;Carai;Catuji;Cedro;Itambacuri;Ladainha;Lajinha;Malacacheta;Matias Lobato;Mucuri;Ouro Verde;Pote;Sucanga;Topazio;Valao"/> 
	<meta name="keywords" content="Manutencao de Placas Solar;Instalacao de usinas fotovoltaica;Consultória e perícia;Monitoramento de inversores;Garantia para equipamentos inversores;Manutencao de aquecedor solar;Agende sua consulta: Whats: 33-99966-2708;Teofilo Otoni;Campanario;Carai;Catuji;Cedro;Itambacuri;Ladainha;Lajinha;Malacacheta;Matias Lobato;Mucuri;Ouro Verde;Pote;Sucanga;Topazio;Valao" /> 

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
<style type="text/css">


.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 13px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #4ad1e5;
}

.plus-sign:before {
	content: "+";
}

.currency-sign:before {
	
	content: "+R$";
}

</style>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

<script type="text/javascript">

 $(document).ready(function () {
    $("#servico").change(function(){
		var servico = $(this).val();
		if(servico == 'Orçamento de instalação usina solar' || servico == 'Garantia de inversores' || servico == 'Consultório e Pericia' || servico == 'Monitoramento de Inversores'){
			if(servico == 'Garantia de inversores' || servico == 'Consultório e Pericia' || servico == 'Monitoramento de Inversores'){
				$("#tipo_telhado").hide();
				$("#quantidade").hide();
			}else{
				$("#tipo_telhado").show();
			}
			
		}else{
			$("#tipo_telhado").hide();
			$("#quantidade").show();
		}
		
		
	});
	
	$("#enviar").click(function(){
		
		var name = $("#name").val();
		var email = $("#email").val();
		var telefone = $("#telefone").val();
		var cidade = $("#cidade").val();
		var servico = $("#servico").val();
		var area_atuacao = $("#area_atuacao").val();
		var quantidade = $("#quantidade").val();
			
		
		if(name == '' || email == ''|| telefone == ''|| cidade == ''|| servico == '0' || area_atuacao == '0' || quantidade == '' ){	
			alert('Todos os campos são obrigatórios');
		}else{
			if(servico == 'Orçamento de instalação usina solar'){
				var telhado = $("#tipo_telhado").val();
				if(telhado == '0'){
					alert('Todos os campos são obrigatórios');
				}else{
					$('form#form').submit();	
				}
			}else{
				$('form#form').submit();	
			}				
			
		}
		
	});
 });
	
(function ($) {
	
	
	
	
	
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 2000,           // how long it should take to count between the target numbers
		refreshInterval: 50,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
</script>
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contato@havanssolar.com.br">contato@havanssolar.com.br</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
		<a href="https://wa.me/5533999662708" target='_blank' class="whatsapp"><i class="bi bi-whatsapp"></i></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/logo.png" class="img-fluid" alt="Havans Solar">

      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php#home">Home</a></li>
          <li><a href="index.php#sobre">Quem Somos</a></li>
          <li><a href="index.php#servicos">Serviços</a></li>
          <li><a href="index.php#obras">Nossas Obras</a></li>
          <li><a href="index.php#home">Contato</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
	
  </header><!-- End Header -->
  <!-- End Header -->