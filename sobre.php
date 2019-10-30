<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

			<div role="main" class="main">
				
				<section class="page-header page-header-light page-header-more-padding">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h1>Quem Somos</h1>
							</div>
							<div class="col-lg-6">
								<ul class="breadcrumb">
									<li><a href="index.php">Inicio</a></li>
									<li><a href="sobre.php">Sobre</a></li>
									<li class="active">Quem Somos</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row pb-5 pt-3">
						<div class="col-lg-9">
							
							<p class="lead mb-4">A Porto Imoobiliaria está conectada com você. Nosso site atinge cerca de 10 mil acessos ao mês. Fotos e vídeos profissionais dos imóveis cadastrados, anúncios na TV, redes sociais (Facebook e Instagram) e nos principais portais especializados são o diferencial da nossa divulgação direcionada. O resultado dessa dedicação e atendimento personalizado é a satisfação dos nossos clientes. Aqui, eles se sentem à vontade para expor OPINIÕES. Por isso, mais de 80% dos novos clientes chegam através da indicação de quem já tem um relacionamento com a Porto Imobiliaria. Essa demonstração de confiança renova nossa garra e vontade de continuar proporcionando as melhores experiências. </p>

							<img width="400" class="img-fluid float-right ml-4 mb-4 mt-1" alt="" src="img/demos/real-estate/agency.jpg">
<br>
							<p>Os sócios, gestores e especialistas em direito imobiliário, acumulam mais de 30 anos de atuação no setor. Esse conhecimento confere a capacidade para entender as suas necessidades e fornecer soluções diferenciadas.</p>

							<p>Orientar clientes na conquista de segurança e comodidade nas transações imobiliárias. Esses foram os objetivos dos sócios Noel Silva e Neuza Marques, quando idealizaram a NNOVA SOLUÇÕES IMOBILIÁRIAS, em 2008.</p>
<br><br>
							<div class="row">
								<div class="col-lg-4">
									<h4 class="mt-4 mb-3">Missao</h4>

									<p>Pensar em soluções imobiliárias de qualidade, inovadoras e personalizadas, que contribuam para o desenvolvimento dos negócios de cada um dos clientes.</p>
								</div>
								<div class="col-lg-4">
									<h4 class="mt-4 mb-3">Visao</h4>

									<p>Antecipar tendências e trabalhar para atender as expectativas dos nossos clientes.</p>
								</div>
								<div class="col-lg-4 mb-4 mb-lg-0">
									<h4 class="mt-4 mb-3">Valores</h4>

									<p>GCom transparência e ética, priorizamos o respeito ao cliente e a responsabilidade social como atitudes indispensáveis para a manutenção da confiança conquistada no mercado.</p>
								</div>
							</div>

						</div>
						<div class="col-lg-3">
							<aside class="sidebar">
								<div class="row">
									<div class="col-md-6 col-lg-12">	
										<div class="agents text-color-light text-center">
											<h4 class="text-light pt-4 m-0">Corretores</h4>
											<div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1 pt-3 m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
												<div class="pr-2 pl-2">
													<a href="corretores.php" class="text-decoration-none">
														<span class="agent-thumb">
															<img class="img-fluid rounded-circle" src="img/team/team-11.jpg" alt />
														</span>
														<span class="agent-infos text-light pt-3">
															<strong class="text-uppercase font-weight-bold">Joao Neves</strong>
															<span class="font-weight-light">(71) 4762-2026</span>
															<span class="font-weight-light">corretor@domain.com</span>
														</span>
													</a>
												</div>
												<div class="pr-2 pl-2">
													<a href="corretores.php" class="text-decoration-none">
														<span class="agent-thumb">
															<img class="img-fluid rounded-circle" src="img/team/team-12.jpg" alt />
														</span>
														<span class="agent-infos text-light pt-3">
															<strong class="text-uppercase font-weight-bold">Antonio Silva</strong>
															<span class="font-weight-light">(71) 4762-2026</span>
															<span class="font-weight-light">asilva@domain.com</span>
														</span>
													</a>
												</div>
												<div class="pr-2 pl-2">
													<a href="corretores.php" class="text-decoration-none">
														<span class="agent-thumb">
															<img class="img-fluid rounded-circle" src="img/team/team-13.jpg" alt />
														</span>
														<span class="agent-infos text-light pt-3">
															<strong class="text-uppercase font-weight-bold">Patricia Matos</strong>
															<span class="font-weight-light">(71) 4762-2026</span>
															<span class="font-weight-light">patmatos@domain.com</span>
														</span>
													</a>
												</div>
												<div class="pr-2 pl-2">
													<a href="corretores.php" class="text-decoration-none">
														<span class="agent-thumb">
															<img class="img-fluid rounded-circle" src="img/team/team-14.jpg" alt />
														</span>
														<span class="agent-infos text-light pt-3">
															<strong class="text-uppercase font-weight-bold">Andre Neves</strong>
															<span class="font-weight-light">(71) 4762-2026</span>
															<span class="font-weight-light">a.neves@domain.com</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-12">
										<div class="newsletter box-shadow-custom p-4 text-center">
											<i class="icon-envelope-letter icons"></i>
											<h4 class="mt-1 mb-1">
												Newsletter
											</h4>
											<p>
												Subscribe and be the first to know about our best offers
											</p>

											<div class="alert alert-success d-none" id="newsletterSuccess">
												<strong>Success!</strong> You've been added to our email list.
											</div>

											<div class="alert alert-danger d-none" id="newsletterError"></div>

											<form id="newsletterForm" class="text-black pt-2" action="php/newsletter-subscribe.php" method="POST">
												<input class="form-control" placeholder="Your Name *" name="newsletterName" id="newsletterName" type="text">
												<input class="form-control" placeholder="Your Email Address *" name="newsletterEmail" id="newsletterEmail" type="text">
												<button class="btn btn-light btn-block text-uppercase background-color-secondary mt-4 text-light p-2 pl-5 pr-5" type="submit">Subscribe</button>
											</form>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>

				</div>

<?php include "includes/footer.php"; ?>
