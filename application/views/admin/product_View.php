
<section id="cart_items">
	<div class="container">
		
		<div class="table-responsive cart_info">
			<button style="margin-bottom: 5px" type="button" class="btn btn-default hbtn" data-toggle="modal" data-target="#addPro">Thêm Hàng hóa</button>

			<div class="modal fade" id="addPro" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Thêm Hàng hóa</h4>
						</div>
						<div class="modal-body">
							<form class="form-horizontal" action="<?php echo $base_url; ?>admin/product/add" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-xs-9">
									<input class="form-control hlineheight" type="text" name="txtName" placeholder="Tên Hàng hóa" pattern="+[a-zA-Z0-9]">
									<div class="row">
										<div class="col-xs-5">
											<div class="row">
												<label class="col-xs-2 control-label">Giá: </label> 
												<div class="col-xs-8"><input class="form-control hlineheight" type="text" name="txtPrice" value="0" pattern="+[0-9]"></div>
											</div>
										</div>									
										<div class="col-xs-7">
										<div class="row">
											<label class="col-xs-6 control-label">Số lượng Tồn: </label>
											<div class="col-xs-4"><input class="form-control hlineheight" type="text" name="txtInventory" value="0" pattern="+[0-9]"></div>
											</div>
										</div>
									</div>
									<div class="row">
									<div class="col-xs-6 hlineheight">
									<select class="form-control" name="txtCat"> <!--Nhóm hàng -->
									  <?php 
									  	if (isset($category)) {
									  		foreach ($category as $key => $value) {
									  			echo "<option value=".$value->id.">".$value->name."</option>";
									  		}
									  	}
									  	else
									  	{
									  		echo '<option value="1">Chưa có nhóm hàng</option>';
									  	}
									   ?>
									</select></div> <!-- END nhóm hàng -->
									<div class="col-xs-6 hlineheight">
									<select class="form-control" name="txtBrand"> <!--Thương hiệu-->
									  <?php 
									  	if (isset($brand)) {
									  		foreach ($brand as $key => $value) {
									  			echo "<option value=".$value->id.">".$value->name."</option>";
									  		}
									  	}
									  	else
									  	{
									  		echo '<option value="1">Chưa có Thương hiệu</option>';
									  	}
									   ?>
									</select></div> <!-- END thương hiệu -->
									</div>
									<textarea name="txtDesc" class="form-control" rows="3" placeholder="Mô tả"></textarea>
									</div>
								<div class="col-xs-3">
									<img src='<?php 
									if (isset($product["image"])) {
										echo $base_url."public/images/shop/".$product["image"];
									}
									 ?>' id="img" class="img-responsive hlineheight" style="min-height: 110px">
									<div class="row">
										<input id="f" type="file" onchange="file_change(this)" style="display: none" />
										<input type="button" class="btn btn-default col-xs-8 col-xs-offset-2" value="Chọn ảnh" onclick="document.getElementById('f').click()" />
									</div>
									<div class="row">
										<input type="submit" class="btn btn-primary col-xs-8 col-xs-offset-2" value="Lưu">
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Mã Hàng hóa</td>
						<td class="description">Tên Hàng hóa</td>
						<td class="price">Giá</td>
						<td class="quantity">Số lượng tồn</td>
						<td class="total"></td>
						<td></td>
					</tr>
				</thead>

				<tbody>

				<?php foreach ($product as $key => $value):	?>
					<tr>
						<td class="cart_product">
							<?php echo $value->id; ?>
						</td>
						<td class="cart_description">
							<?php echo $value->name; ?>
						</td>
						<td class="cart_price">
							
						</td>
						<td class="cart_quantity">
							
						</td>
						<td class="cart_edit">
							<a class="cart_quantity_delete" data-toggle="modal" data-target="#editCat"><i class="glyphicon glyphicon-pencil"></i></a>
							<div class="modal fade" id="editCat" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Sửa Hàng hóa</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" action="<?php echo $base_url; ?>/admin/category/update/<?php echo $value->id; ?>" method="POST">
												<div class="row">
													<div class="col-xs-9">
														<input class="form-control" type="text" name="txtName" value="<?php echo $value->name; ?>" />
													</div>
													<div class="col-xs-3">
														<input class="form-control hbtn" type="submit" class="btn btn-default" value="Lưu">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" data-toggle="modal" data-target="#delCat"><i class="fa fa-times"></i></a>
							<div class="modal fade" id="delCat" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Thông báo</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" action="<?php echo $base_url; ?>/admin/product/drop/<?php echo $value->id; ?>">
												<div class="row">
													<h4 style="padding-left: 10px; margin-bottom: 10px;"><i>Bạn muốn xóa <?php echo $value->name; ?> ?</i></h4>
												</div>
												<div class="row">
													<div class="col-xs-3 col-xs-offset-6">
														<input class="form-control hbtn" type="submit" class="btn btn-default" value="Xác nhận">
													</div>
													<div class="col-xs-3">
														<input class="form-control hbtn" class="btn btn-default" type="button" data-dismiss="modal" value="Hủy">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<?php endforeach; ?>
					
				</tbody>
			</table>
		</div>
	</div>
</section>
