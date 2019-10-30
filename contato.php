<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

			<div role="main" class="main">
				
				<section class="page-header page-header-light page-header-more-padding">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h1>Contato</h1>
							</div>
							<div class="col-lg-6">
								<ul class="breadcrumb">
									<li><a href="demo-real-estate.html">Home</a></li>
									<li class="active">Contato</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-lg-8">

							<h4 class="heading-primary mt-4">Envie uma Mensagem</h4>
							<p>Ta com duvidas? Envie a sua mensagem que estaremos retornando com o maximo de brevidade possivel.</p>

							<div class="alert alert-success d-none mt-4" id="contactSuccess">
								<strong>Sucesso!</strong> A sua mensagem foi enviada.
							</div>

							<div class="alert alert-danger d-none mt-4" id="contactError">
								<strong>Erro!</strong> Houve um erro na sua mensagem.
								<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
							</div>

							<form id="contactForm" action="php/contact-form.php" method="POST">
								<input type="hidden" value="Contact Form" name="subject" id="subject">
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label>Seu Nome *</label>
										<input type="text" value="" data-msg-required="Por favor insira o seu nome." maxlength="100" class="form-control" name="name" id="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label>Seu Email *</label>
										<input type="email" value="" data-msg-required="Por favor insira o seu email." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label>Mensagem *</label>
										<textarea maxlength="5000" data-msg-required="Por favor insira a sua mensagem." rows="5" class="form-control" name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Enviar Mensagem" class="btn btn-secondary mb-4" data-loading-text="Enviando Por Favor Aguarde...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4">

							<h4 class="heading-primary mt-4">Escritorio</h4>
							<ul class="list list-icons mt-3">
								<li>
									<a href="mailto:mail@domain.com">
										<i class="icon-envelope-open icons"></i> mail@domain.com
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-call-out icons"></i> (71) 4123-4567
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-social-linkedin icons"></i> Lindekin
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-social-facebook icons"></i> Facebook
									</a>
								</li>
							</ul>

							<hr class="solid mt-5 mb-5">

							<h4 class="heading-primary">Horario</h4>
							<ul class="list list-icons mt-3">
								<li><i class="fa fa-clock-o"></i> Segunda - Sexta - 9:00 as 17:00</li>
								<li><i class="fa fa-clock-o"></i> Sabado - 9:00 as 14:00</li>
								<li><i class="fa fa-clock-o"></i> Domingo - Fechado</li>
							</ul>

						</div>

					</div>

				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map mt-5 mb-0"></div>

<?php include "includes/footer.php"; ?>
