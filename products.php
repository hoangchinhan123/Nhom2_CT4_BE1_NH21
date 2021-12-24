<?php include "header.php"; ?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- STORE -->
					<div id="store" class="col-md-12">
						<!-- store top filter -->
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<?php
							if(isset($_GET['manu_id'])):
								$Manu_id = $_GET['manu_id'];
								$getProductByMaNU_Id = $product->getProductByMaNU_Id($Manu_id);
								//echo "Result: ".count($getProductByMaNU_Id);
								foreach($getProductByMaNU_Id as $value):
							?>
							
							
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img style = "height:300px; width:400px" src="./img/<?php echo $value['image'] ?>" alt="product.php">
										<div class="product-label">
											
										</div>
									</div>
									<div class="product-body">
									<? 
									foreach($getAllProducts as $value):
									?>
										<h3 class="product-name"><a href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
									
										<h4 class="product-price"><a href="product.php"><?php echo number_format( $value['price']) ?>VND</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
							<!-- /product -->
							<?php endif; ?>
							
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination"><?php 
							$getMenu = $Menu->getAllMenu();
							foreach($getMenu as $value):
							?>
							<li><a href="products.php?manu_id=<?php echo $value['manu_id'] ?>"><?php echo $value['manu_id'] ?></a></li>
							<?php endforeach; ?>
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						
						<!-- /store bottom filter -->
						
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		
		<?php include "footer.php"; ?>