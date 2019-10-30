<?php 
$ativo = "nulo";
if(empty($_GET['ativo'])){$currentPage = "inicio";} else {
$currentPage = $_GET['ativo']; 
}
?>
<body class="loading-overlay-showing" data-loading-overlay>
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 37, 'stickySetTop': '-37px', 'stickyChangeLogo': false}">
				<div class="header-body background-color-primary pt-0 pb-0">
					<div class="header-top header-top-style-3 header-top-custom background-color-primary">
						<div class="container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="d-none d-md-block">
													<span class="ws-nowrap"><i class="icon-location-pin icons"></i> Itapua, Salvador</span>
												</li>
												<li>
													<span class="ws-nowrap"><i class="icon-call-out icons"></i> (71) 4762-2026</span>
												</li>
												<li class="d-none d-md-block">
													<span class="ws-nowrap"><i class="icon-envelope-open icons"></i> <a class="text-decoration-none" href="mailto:mail@example.com">migueledias@gmail.com</a></span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container custom-position-initial">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.php">
											<img alt="Porto" width="143" height="40" src="img/demos/real-estate/logo-real-estate.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 m-0">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="<?php if($currentPage =='inicio'){echo 'active';} ?>" href="index.php?ativo=inicio">
															Inicio
														</a>
													</li>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="<?php if($currentPage =='imoveis'){echo 'active';}?>" href="imoveis.php?ativo=imoveis">
															Imoveis
														</a>
													</li>

													<li class="dropdown dropdown-full-color dropdown-quaternary">
														<a class="dropdown-toggle <?php if($currentPage =='sobre'){echo 'active';}?>" href="sobre.php?ativo=sobre">
															Quem Somos
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item <?php if($currentPage =='sobre'){echo 'active';}?>" href="corretores.php?ativo=corretores">Corretores</a></li>
															<li><a class="dropdown-item <?php if($currentPage =='sobre'){echo 'active';}?>" href="sobre.php?ativo=sobre">Quem Somos</a></li>
														</ul>
													</li>
													<li class="dropdown-full-color dropdown-quaternary">
														<a class="nav-link <?php if($currentPage =='contato'){echo 'active';}?>" href="contato.php?ativo=contato">
															Contato
														</a>
													</li>
													<li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega">
														<a class="nav-link dropdown-toggle" href="ver_busca.php">
															Procurar <i class="fa fa-search"></i>
														</a>
														<ul class="dropdown-menu custom-fullwidth-dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<form id="propertiesForm" action="ver_busca.php" method="POST">
																		<div class="container p-0">
																			<div class="form-row">
																	<div class="form-group col-lg-2 mb-0">
											<div class="form-control-custom mb-3">
												<select class="form-control text-uppercase text-2" name="busca_tipo">
													<option value="">Tipo de Imovel</option>
													<option value="Apartamento">Apartamento</option>
													<option value="Casa">Casa</option>
												</select>
											</div>
										</div>
										<div class="form-group col-lg-2 mb-0">
											<div class="form-control-custom mb-3">
												<select class="form-control text-uppercase text-2" name="busca_venalu">
													<option value="">Venda Aluguel</option>
													<option value="Venda">Comprar</option>
													<option value="Aluguel">Alugar</option>
												</select>
											</div>
										</div>
										<div class="form-group col-lg-2 mb-0">
											<div class="form-control-custom mb-3">
												<select class="form-control text-uppercase text-2" name="busca_valor">
													<option value="">Valor Min</option>
													<option value="100000">R$ 100.000,00</option>
													<option value="200000">R$ 200.000,00</option>
													<option value="300000">R$ 300.000,00</option>
													<option value="400000">R$ 400.000,00</option>
													<option value="700000">R$ 700.000,00</option>
												</select>
											</div>
										</div>
										<div class="form-group col-lg-2 mb-0">
											<div class="form-control-custom mb-3">
												<select class="form-control text-uppercase text-2" name="busca_bairro">
													<option value="">Bairro</option>
													<option value="Piata">Piata</option>
													<option value="Paralela">Paralela</option>
													<option value="Barra">Barra</option>
													<option value="Itapua">Itapua</option>
													<option value="Praia do Flamengo">Praia do Flamengo</option>
													<option value="Ondina">Ondina</option>
													<option value="Rio Vermelho">Rio Vermelho</option>
													<option value="Horto Florestal">Horto Florestal</option>
												</select>
											</div>
										</div>
										<div class="form-group col-lg-2 mb-0">
											<div class="form-control-custom mb-3">
												<select class="form-control text-uppercase text-2" name="busca_quartos">
													<option value="">Quartos</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
												</select>
											</div>
										</div>
																				<div class="form-group col-lg-2 mb-0">
																					<input type="submit" value="Buscar Imovel" name="buscar" class="btn btn-secondary btn-lg btn-block text-uppercase text-2">
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
															</li>
														</ul>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fa fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>