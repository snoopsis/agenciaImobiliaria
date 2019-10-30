<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

			<div role="main" class="main">

				<section class="page-header page-header-light page-header-more-padding">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h1>Imoveis <p class="lead mb-0">Venda e Aluguel</p></h1>
							</div>
							<div class="col-lg-6">
								<ul class="breadcrumb">
									<li><a href="demo-real-estate.html">Inicio</a></li>
									<li class="active">Imoveis</li>
								</ul>
							</div>
						</div>
						<div class="row mt-4">
							<div class="col">

								<form id="propertiesForm" action="ver_busca.php" method="POST">
									<div class="form-row">
										<div class="form-group col-lg-2 mb-0">
											<div class="form-control-custom mb-3">
												<select class="form-control text-uppercase text-2" name="busca_tipo" data-msg-required="This field is required." id="propertiesPropertyType2">
													<option value="">Tipo de Imovel</option>
													<option value="Apartamento">Apartamento</option>
													<option value="Casa">Casa</option>
												</select>
											</div>
										</div>
										<div class="form-group col-lg-2 mb-0">
											<div class="form-control-custom mb-3">
												<select class="form-control text-uppercase text-2" name="busca_venalu" data-msg-required="This field is required." id="propertiesPropertyType2">
													<option value="">Venda Aluguel</option>
													<option value="Venda">Comprar</option>
													<option value="Aluguel">Alugar</option>
												</select>
											</div>
										</div>
										<div class="form-group col-lg-2 mb-0">
											<div class="form-control-custom mb-3">
												<select class="form-control text-uppercase text-2" name="busca_valor" data-msg-required="This field is required." id="propertiesLocation2">
													<option value="">Valor Min</option>
													<option value="100.000">R$ 100.000,00</option>
													<option value="200.000">R$ 200.000,00</option>
													<option value="300.000">R$ 300.000,00</option>
													<option value="400.000">R$ 400.000,00</option>
													<option value="700.000">R$ 700.000,00</option>
												</select>
											</div>
										</div>
										<div class="form-group col-lg-2 mb-0">
											<div class="form-control-custom mb-3">
												<select class="form-control text-uppercase text-2" name="busca_bairro" data-msg-required="This field is required." id="propertiesMinBeds2">
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
												<select class="form-control text-uppercase text-2" name="busca_quartos" data-msg-required="This field is required." id="propertiesMinBeds2">
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
								</form>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row mb-4 properties-listing sort-destination p-0">
<?php
error_reporting(0);
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'buzios');
define('DB_PASSWORD', 'swing102030');
define('DB_NAME', 'imobiliaria');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	                if($_POST['busca_venalu']) {$busca_venalu = $_POST['busca_venalu']; }
					if($_POST['busca_quartos']) {$busca_quartos = $_POST['busca_quartos']; }
					if($_POST['busca_bairro']) {$busca_bairro = $_POST['busca_bairro']; }
					if($_POST['busca_valor']) {$busca_valor = $_POST['busca_valor']; }
					if($_POST['busca_tipo']) {$busca_tipo = $_POST['busca_tipo']; }

	                $query = "SELECT * FROM imovel ";
					if($_POST['buscar']){$query .= "WHERE (cidade = 'Salvador') ";}
					if(isset($busca_quartos)){$query .= "AND (quartos = $busca_quartos) ";}
					if(isset($busca_venalu)){$query .= "AND (ven_alu = '$busca_venalu') ";}
					if(isset($busca_bairro)){$query .= "AND (bairro = '$busca_bairro') ";}
					if(isset($busca_valor)){$query .= "AND (valor >= $busca_valor) ";}
					if(isset($busca_tipo)){$query .= "AND (tipo = '$busca_tipo') ";}

				    $select_all_anuncios = mysqli_query($link, $query);
					while($row = mysqli_fetch_assoc($select_all_anuncios)){
					$id = $row['id'];
					$tipo = $row['tipo'];
					$valor = $row['valor'];
					$ven_alu = $row['ven_alu'];
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
?>

						<div class="col-md-6 col-lg-4 p-3 isotope-item">
							<div class="listing-item">
								<a href="ver_imovel.php?id=<?php echo $id; ?>" class="text-decoration-none">
									<div class="thumb-info thumb-info-lighten">
										<div class="thumb-info-wrapper m-0">
											<img src="img/gallery/<?php echo $imagem1; ?>" class="img-fluid" alt="">
											<div class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
												<?php echo $ven_alu; ?>
											</div>
										</div>
										<div class="thumb-info-price background-color-primary text-color-light text-4 p-2 pl-4 pr-4">
											<?php echo $valor; ?>
											<i class="fa fa-caret-right text-color-secondary float-right"></i>
										</div>
										<div class="custom-thumb-info-title b-normal p-4">
											<div class="thumb-info-inner text-3"><?php echo $bairro; ?></div>
											<ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
												<li>
													<span class="accomodation-title">
														Quartos:
													</span>
													<span class="accomodation-value custom-color-1">
														<?php echo $quartos; ?>
													</span>
												</li>
												<li>
													<span class="accomodation-title">
														Banheiros:
													</span>
													<span class="accomodation-value custom-color-1">
														<?php echo $banheiros; ?>
													</span>
												</li>
												<li>
													<span class="accomodation-title">
														Area:
													</span>
													<span class="accomodation-value custom-color-1">
														<?php echo $area; ?>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</a>
							</div>
						</div>
<?php } ?>

					</div>



				</div>


<?php include "includes/footer.php"; ?>
