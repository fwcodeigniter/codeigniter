
<section id="cart_items">
	<div class="container">
		
		<div class="table-responsive cart_info">
			<button style="margin-bottom: 5px" type="button" class="btn btn-default hbtn" data-toggle="modal" data-target="#addUser">Thêm Người dùng</button>

			<div class="modal fade" id="addUser" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Thêm Người dùng</h4>
						</div>
						<div class="modal-body">
							<form class="form-horizontal" action="<?php echo $base_url; ?>/admin/user/add" method="POST">
								<div class="row">
									<div class="col-xs-9">
										<input class="form-control" type="text" name="txtName" placeholder="Tên Người dùng" pattern="+[a-zA-Z0-9]" />
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
			
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="price">Mã</td>
						<td class="price">Tên Đăng nhập</td>
						<td class="price">Tên Hiển thị</td>
						<td class="price">Số điện thoại</td>
						<td class="image">Địa chỉ</td>
						<td class="image">Email</td>
						<td></td>
						<td></td>
					</tr>
				</thead>

				<tbody>
				
				<?php 
				$num=1;
				foreach ($user as $key => $value):	?>
					<tr>
						<td class="cart_price">
							<?php echo $value->id; ?>
						</td>
						<td class="cart_price">
							<?php echo $value->name; ?>
						</td>
						<td class="cart_price">
							<?php echo $value->dname; ?>
						</td>
						<td class="cart_price">
							<?php echo $value->phone; ?>
						</td>
						<td class="cart_product">
							<?php echo $value->address; ?>
						</td>
						<td class="cart_product">
							<?php echo $value->email; ?>
						</td>
						<td class="cart_edit">
							<a class="cart_quantity_delete" data-toggle="modal" data-target="#editCat<?php echo $num; ?>"><i class="glyphicon glyphicon-pencil"></i></a>
							<div class="modal fade" id="editCat<?php echo $num; ?>" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Sửa Người dùng</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" action="<?php echo $base_url; ?>/admin/user/update/<?php echo $value->id; ?>" method="POST">
												<div class="row">
													<div class="col-xs-9">
														<input class="form-control" type="text" name="txtName" value="<?php echo $value->name; ?>" pattern="+[a-zA-Z0-9]" />
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
							<a class="cart_quantity_delete" data-toggle="modal" data-target="#delCat<?php echo $num; ?>"><i class="fa fa-times"></i></a>
							<div class="modal fade" id="delCat<?php echo $num; ?>" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Thông báo</h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" action="<?php echo $base_url; ?>/admin/user/drop/<?php echo $value->id; ?>">
												<div class="row">
													<h4 style="padding-left: 10px; margin-bottom: 10px;"><i>Bạn muốn xóa Người dùng <?php echo $value->name; ?> ?</i></h4>
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
					<?php 
					$num++;
					endforeach; ?>
					
				</tbody>
			</table>
		</div>
	</div>
</section>
