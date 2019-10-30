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
													<option value="">Min Quartos</option>
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
 if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 6;
        $offset = ($pageno-1) * $no_of_records_per_page;

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'buzios');
define('DB_PASSWORD', 'swing102030');
define('DB_NAME', 'imobiliaria');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        $total_pages_sql = "SELECT COUNT(*) FROM imovel";
        $result = mysqli_query($link,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM imovel LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($link,$sql);
        while($row = mysqli_fetch_array($res_data)){

					$id = $row['id'];
					$tipo = $row['tipo'];
					$valor = $row['valor'];
					$ven_alu = $row['ven_alu'];
					$endereco = $row['endereco'];
					$cidade = $row['cidade'];
					$bairro = $row['bairro'];
					$quartos = $row['quartos'];
					$banheiros = $row['banheiros'];
					$garagem = $row['garagem'];
					$area = $row['area'];
					$ac = $row['ac'];
					$mobiliado = $row['mobiliado'];
					$seg24 = $row['seg24'];
					$academia = $row['academia'];
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

					<div class="row my-5">
						<div class="col">
							<ul class="pagination justify-content-center">
								<li class="page-item"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">«</a></li>
								<li class="page-item <?php if($pageno == 1){echo "active";} ?>"><a class="page-link" href="?pageno=1">1</a></li>
								<li class="page-item <?php if($pageno == 2){echo "active";} ?>"><a class="page-link" href="?pageno=2">2</a></li>
								<li class="page-item <?php if($pageno == 3){echo "active";} ?>"><a class="page-link" href="?pageno=3">3</a></li>
								<li class="page-item"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">»</a></li>
							</ul>
						</div>
					</div>

				</div>

<?php include "includes/footer.php"; ?>
