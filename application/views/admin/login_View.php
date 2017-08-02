<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						<form action="<?php echo $base_url; ?>signin" method="POST">
							<input type="text" placeholder="Tên đăng nhập" name="txtUser" />
							<input type="password" placeholder="Mật khẩu" name="txtPass" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ tài khoản
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Tạo tài khoản mới</h2>
						<form action="" >
							<input type="text" placeholder="Tên đăng nhập" name="txtUser" />
							<input type="password" placeholder="Mật khẩu" name="txtUser" />
							<input type="email" placeholder="Địa chỉ Email" name="txtUser" />
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->