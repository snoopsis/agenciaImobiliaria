<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'buzios');
define('DB_PASSWORD', 'swing102030');
define('DB_NAME', 'imobiliaria');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($link,"utf8");

$imovel_id = $_GET["id"];
$query = "SELECT * FROM imovel WHERE id = $imovel_id";
				    $select_all_anuncios = mysqli_query($link, $query);
					while($row = mysqli_fetch_assoc($select_all_anuncios)){
					$id = $row['id'];
					$tipo = $row['tipo'];
					$valor = $row['valor'];
					$ven_alu = $row['ven_alu'];
					$mapa = $row['mapa'];
					$endereco = $row['endereco'];
					$descricao = $row['descricao'];
					$cidade = $row['cidade'];
					$bairro = $row['bairro'];
					$condominio = $row['condominio'];
					$quartos = $row['quartos'];
					$banheiros = $row['banheiros'];
					$garagem = $row['garagem'];
					$area = $row['area'];
					$ac = $row['ac'];
					$mobiliado = $row['mobiliado'];
					$seg24 = $row['seg24'];
					$academia = $row['academia'];
					$piscina = $row['piscina'];
					$varanda = $row['varanda'];
					$suites = $row['suites'];
					$elevador = $row['elevador'];
					$imagem1 = $row['imagem1'];
					$imagem2 = $row['imagem2'];
					$imagem3 = $row['imagem3'];
					$imagem4 = $row['imagem4'];

}

?>

			<div role="main" class="main">

				<section class="page-header page-header-light page-header-more-padding">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h1><?php echo $tipo; ?><span><?php echo $bairro; ?> - <a href="#map" data-hash data-hash-offset="100">(Mapa Localizacao)</a></span></h1>
							</div>
							<div class="col-lg-6">
								<ul class="breadcrumb">
									<li><a href="demo-real-estate.html">Inicio</a></li>
									<li><a href="demo-real-estate-properties.html">Imoveis</a></li>
									<li class="active">Detalhes</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row pb-5 pt-3">
						<div class="col-lg-9">

							<div class="row">
								<div class="col-lg-7">

									<span class="thumb-info-listing-type thumb-info-listing-type-detail background-color-secondary text-uppercase text-color-light font-weight-semibold p-2 pl-3 pr-3">
										para <?php echo $ven_alu; ?>
									</span>

									<div class="thumb-gallery">
										<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
											<div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
												<div>
													<a href="img/gallery/<?php echo $imagem1; ?>">
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
															<span class="thumb-info-wrapper text-4">
																<img alt="Property Detail" src="img/gallery/<?php echo $imagem1; ?>" class="img-fluid">
																<span class="thumb-info-title text-4">
																	<span class="thumb-info-inner text-4"><i class="icon-magnifier icons text-4"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
												<div>
													<a href="img/gallery/<?php echo $imagem2; ?>">
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
															<span class="thumb-info-wrapper text-4">
																<img alt="Property Detail" src="img/gallery/<?php echo $imagem2; ?>" class="img-fluid">
																<span class="thumb-info-title text-4">
																	<span class="thumb-info-inner text-4"><i class="icon-magnifier icons text-4"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
												<div>
													<a href="img/gallery/<?php echo $imagem3; ?>">
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
															<span class="thumb-info-wrapper text-4">
																<img alt="Property Detail" src="img/gallery/<?php echo $imagem3; ?>" class="img-fluid">
																<span class="thumb-info-title text-4">
																	<span class="thumb-info-inner text-4"><i class="icon-magnifier icons text-4"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
												<div>
													<a href="img/gallery/<?php echo $imagem4; ?>">
														<span class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
															<span class="thumb-info-wrapper text-4">
																<img alt="Property Detail" src="img/gallery/<?php echo $imagem4; ?>" class="img-fluid">
																<span class="thumb-info-title text-4">
																	<span class="thumb-info-inner text-4"><i class="icon-magnifier icons text-4"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
											</div>
										</div>

										<div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
											<div>
												<img alt="Property Detail" src="img/gallery/<?php echo $imagem1; ?>" class="img-fluid cur-pointer">
											</div>
											<div>
												<img alt="Property Detail" src="img/gallery/<?php echo $imagem2; ?>" class="img-fluid cur-pointer">
											</div>
											<div>
												<img alt="Property Detail" src="img/gallery/<?php echo $imagem3; ?>" class="img-fluid cur-pointer">
											</div>
											<div>
												<img alt="Property Detail" src="img/gallery/<?php echo $imagem4; ?>" class="img-fluid cur-pointer">
											</div>
										</div>
									</div>

								</div>
								<div class="col-lg-5">

									<table class="table table-striped">
										<colgroup>
											<col width="35%">
											<col width="65%">
										</colgroup>
										<tbody>
											<tr>
												<td class="background-color-primary text-light align-middle">
													Valor
												</td>
												<td class="text-4 font-weight-bold align-middle background-color-primary text-light">
													<?php echo $valor; ?>
												</td>
											</tr>
											<tr>
												<td>
													Tipo
												</td>
												<td>
													<?php echo $tipo; ?>
												</td>
											</tr>
											<tr>
												<td>
													ID Imovel
												</td>
												<td>
													#<?php echo $id; ?>
												</td>
											</tr>
											<tr>
												<td>
													Endereco
												</td>
												<td>
													<?php echo $endereco; ?><br><a href="#map" class="text-2" data-hash data-hash-offset="100">(Map Location)</a>
												</td>
											</tr>
											<tr>
												<td>
													Cidade
												</td>
												<td>
													<?php echo $cidade; ?>
												</td>
											</tr>
											<tr>
												<td>
													Bairro
												</td>
												<td>
													<?php echo $bairro; ?>
												</td>
											</tr>
											<tr>
												<td>
													Quartos
												</td>
												<td>
													<?php echo $quartos; ?>
												</td>
											</tr>
											<tr>
												<td>
													Suites
												</td>
												<td>
													<?php echo $suites; ?>
												</td>
											</tr>
											<tr>
												<td>
													Banheiros
												</td>
												<td>
													<?php echo $banheiros; ?>
												</td>
											</tr>
											<tr>
												<td>
													Garagem
												</td>
												<td>
													<?php echo $garagem; ?>
												</td>
											</tr>
											<tr>
												<td>
													Area
												</td>
												<td>
													<?php echo $area; ?> m²
												</td>
											</tr>

										</tbody>
									</table>

								</div>
							</div>

							<div class="row">
								<div class="col">

									<h4 class="mt-3 mb-3">Descricao</h4>
									<?php echo $descricao; ?>

									<hr class="solid tall">

									<h4 class="mt-3 mb-3">Detalhes do Imovel</h4>

									<ul class="list list-icons list-secondary row m-0">
										<li class="col-sm-6 col-lg-4 <?php if($ac =='Nao'){echo 'custom-list-item-disabled';} ?>"><i class="fa fa-check"></i> Ar Condicionado</li>
										<li class="col-sm-6 col-lg-4 <?php if($mobiliado =='Nao'){echo 'custom-list-item-disabled';} ?>"><i class="fa fa-check"></i> Mobiliado</li>
										<li class="col-sm-6 col-lg-4 <?php if($garagem =='Nao'){echo 'custom-list-item-disabled';} ?>"><i class="fa fa-check"></i> Garagem</li>
										<li class="col-sm-6 col-lg-4 <?php if($piscina =='Nao'){echo 'custom-list-item-disabled';} ?>"><i class="fa fa-check"></i> Piscina</li>
										<li class="col-sm-6 col-lg-4 <?php if($varanda =='Nao'){echo 'custom-list-item-disabled';} ?>"><i class="fa fa-check"></i> Varanda</li>
										<li class="col-sm-6 col-lg-4 <?php if($seg24 =='Nao'){echo 'custom-list-item-disabled';} ?>"><i class="fa fa-check"></i> Seguranca 24h</li>
										<li class="col-sm-6 col-lg-4 <?php if($academia =='Nao'){echo 'custom-list-item-disabled';} ?>"><i class="fa fa-check"></i> Academia</li>
										<li class="col-sm-6 col-lg-4 <?php if($elevador =='Nao'){echo 'custom-list-item-disabled';} ?>"><i class="fa fa-check"></i> Elevador</li>
										<li class="col-sm-6 col-lg-4 <?php if($condominio =='Nao'){echo 'custom-list-item-disabled';} ?>"><i class="fa fa-check"></i> Condominio</li>

									</ul>

									<hr class="solid tall">

									<h4 class="mt-3 mb-3" id="map">Localizacao Mapa</h4>
									<div id="googlemaps" class="google-map m-0 mb-5">
                                    <iframe class="google-map m-0 mb-5" src="<?php echo $mapa ?>" frameborder="0" style="border:0"></iframe>
									</div>

								</div>
							</div>

						</div>
						<div class="col-lg-3">
							<aside class="sidebar">
								<div class="agents text-color-light text-center">
									<h4 class="text-light pt-5 m-0">Corretores</h4>
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

								<h4 class="pt-4 mb-3 text-color-dark">Peca Informacoes</h4>
								<p>Entre em contato por mensagem ou telefone para saber mais sobre este imovel</p>

								<form id="contactForm" action="php/contact-form.php" method="POST" class="mb-4">
									<div class="form-row">
										<div class="form-group col">
											<label>Seu Nome *</label>
											<input type="text" value="" data-msg-required="Por favor insira o seu nome." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label>Seu Email *</label>
											<input type="email" value="" data-msg-required="Por favor insira o seu email." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>

									<div class="form-row">
										<div class="form-group col">
											<label>Mensagem *</label>
											<textarea maxlength="5000" data-msg-required="Por favor insira a sua mensagem." rows="6" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Enviar Mensagem" class="btn btn-secondary mb-lg-5" data-loading-text="A Enviar...">

											<div class="alert alert-success d-none" id="contactSuccess">
												Mensagem foi enviada com sucesso.
											</div>

											<div class="alert alert-danger d-none" id="contactError">
												Houve um erro ao enviar a sua mensagem.
											</div>
										</div>
									</div>
								</form>

							</aside>
						</div>
					</div>

				</div>

<?php include "includes/footer.php"; ?>
