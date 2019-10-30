
		 <div class="col-lg-9">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-normal mb-2">
										Imoveis para <strong class="text-color-secondary font-weight-extra-bold">Venda</strong> <span class="font-weight-light">ou</span> <strong class="text-color-secondary font-weight-extra-bold">Aluguel</strong>
									</h2>
								</div>
							</div>
							<div id="listingLoadMoreWrapper" class="row properties-listing sort-destination p-0" data-total-pages="2">
<?php
 if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 9;
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
																m²:
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
								</div> <!-- -->
			<?php } ?>


							</div>
<?php



?>
							<div class="row my-5">
						<div class="col">
							<ul class="pagination justify-content-center">
								<li class="page-item"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">«</a></li>
								<li class="page-item <?php if($pageno == 1){echo "active";} ?>"><a class="page-link" href="?pageno=1">1</a></li>
								<li class="page-item <?php if($pageno == 2){echo "active";} ?>"><a class="page-link" href="?pageno=2">2</a></li>
								<li class="page-item"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">»</a></li>
							</ul>
						</div>
					</div>

						</div>
