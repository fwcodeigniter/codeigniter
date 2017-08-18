<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items
						<h2 class="title text-center">Tính năng nổi bật</h2>
						<?php if (isset($product)):
						foreach ($product as $key => $value): ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $base_url; ?>/public/images/home/<?php echo $value->image; ?>" alt="" />
											<h2><?php echo number_format($value->price,0,',','.'); ?></h2>
											<p><?php echo $value->name; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo number_format($value->price,0,',','.'); ?></h2>
												<p><?php echo $value->name; ?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php endforeach; endif; ?>-->
                                                
						
					</div>

<!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href=#dienthoai data-toggle="tab">Điện thoại</a></li>
								<li><a href="#laptop" data-toggle="tab">Laptop</a></li>
								<li><a href="#maytinhbang" data-toggle="tab">Máy tính bảng</a></li>
                                                                <li><a href="#mayin" data-toggle="tab">Máy in</a></li>
							</ul>
						</div>
						<div class="tab-content">
                                                    <?php ?>
							<div class="tab-pane fade active in" <?php ?>id="dienthoai" >
							
                                                            <?php if (isset($product)):
                                                                foreach ($product as $key => $value): ?>
        
                                                            <?php if ($value->cat_id==1){ ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/products/<?php echo $value->image?>" alt="" />
												<h2><?php echo number_format($value->price,3); echo "đ"?></h2>
												<p><?php echo $value->name?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
                                                            <?php }endforeach; endif; ?>
 
							</div>
							
							<div class="tab-pane fade" id="mayin" >
								<?php if (isset($product)):
                                                                foreach ($product as $key => $value): ?>
        
                                                            <?php if ($value->cat_id==3){ ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/products/<?php echo $value->image?>" alt="" />
												<h2><?php echo number_format($value->price,3); echo "đ"?></h2>
												<p><?php echo $value->name?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
                                                            <?php }endforeach; endif; ?>			
							</div>
							
							<div class="tab-pane fade" id="maytinhbang" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/ipad.jpg" alt="" />
												<h2>8.999.000đ</h2>
												<p>iPad Wi-Fi 32GB (2017</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/sstab.jpg" alt="" />
												<h2>9.999.000đ</h2>
												<p>Samsung Tab S2 9.7 inch</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/lenovo.jpg" alt="" />
												<h2>3.990.000đ</h2>
												<p>Lenovo Phab 2</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/huawei.jpg" alt="" />
												<h2>4.290.000đ</h2>
												<p>Huawei MediaPad T3 8.0 (2017</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="laptop" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/asus.jpg" alt="" />
												<h2>6.999.000đ</h2>
												<p>Asus E502NA-GO010</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/dell.png" alt="" />
												<h2>10.290.000đ</h2>
												<p>Dell Ins N3458/i3-5005U</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/macbook.jpg" alt="" />
												<h2>33.999.000đ</h2>
												<p>Macbook 12 256GB (2017</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/msi.jpg" alt="" />
												<h2>20.999.000đ</h2>
												<p>MSI GL62M 7RDX-1817XVN</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $base_url; ?>/public/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Mục đề xuất</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $base_url; ?>/public/images/home/s8.jpg" alt="" />
                                                                                                        <h2>18.990.000đ</h2>
                                                                                                        <p>Samsung Galaxy S8 Plus</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $base_url; ?>/public/images/home/macbook.jpg" alt="" />
                                                                                                        <h2>33.999.000đ</h2>
                                                                                                        <p>Macbook 12 256GB (2017</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $base_url; ?>/public/images/home/mayin2.jpg" alt="" />
                                                                                                        <h2>4.390.000đ</h2>
                                                                                                        <p>Máy in HP GT5820 (M2Q28A)</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $base_url; ?>/public/images/home/msi.jpg" alt="" />
                                                                                                        <h2>20.999.000đ</h2>
                                                                                                        <p>MSI GL62M 7RDX-1817XVN</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $base_url; ?>/public/images/home/sstab.jpg" alt="" />
                                                                                                        <h2>9.999.000đ</h2>
                                                                                                        <p>Samsung Tab S2 9.7 inch</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $base_url; ?>/public/images/home/dell.png" alt="" />
                                                                                                        <h2>10.290.000đ</h2>
                                                                                                        <p>Dell Ins N3458/i3-5005U</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>