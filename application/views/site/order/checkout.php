<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url();?>">Trang chủ</a></li>
                <li class="active">Thanh toán</li>
            </ol>
        </div><!--/breadcrums-->
       
        <div class="checkout-options">
            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('admin/login')?>"><label> Đăng nhập </label> </a>
                </li>
                
                <li>
                    <a href="<?php echo base_url('cart/index')?>"><i class="fa fa-times"></i>Quay lại</a>
                </li>
            </ul>
        </div><!--/checkout-options-->

        <div class="review-payment">
            <h2>Thông tin đơn hàng và thanh toán</h2>
        </div>

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image"></td>
                        <td class="description">Sản phẩm</td>
                        <td class="price">Đơn giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Thành tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $total_amount = 0; ?>
                    <?php foreach ($carts as $rows): ?>
                        <?php $total_amount = $total_amount + $rows['subtotal']; ?>
                        <tr>
                            <td class="cart_product">
                                <h4><a href=""</a></h4>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?php echo $rows['name']; ?></a></h4>
                            </td>
                            <td class="cart_price">
                                <p><?php echo number_format($rows['price']); ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    
                                    <input class="cart_quantity_input" type="text" name="qty_<?php echo $rows['id']; ?>" value="<?php echo $rows['qty']; ?>" autocomplete="off" size="2">
                                 
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format($rows['subtotal']); ?> VNĐ</p>
                            </td>
                            
                        </tr>
                    <?php endforeach; ?> 
                </tbody>
            </table>
        </div>
        <div class="shopper-informations">
            <div class="row">
               
                <div class="col-sm-8">
                    <div class="bill-to">
                        
                        <div class="form-one">
                            <p>Thông tin khách hàng</p>
                            <form>
                                <tr>
                                    <td><input type="text" name="name" value="<?php echo isset($user->name) ? $user->name : '' ?>" placeholder="Nhập họ tên"> 
                                        <i><?php echo form_error('name'); ?></i>  </td>        
                                    <td><input type="text" name="email" value="<?php echo isset($user->email) ? $user->email : '' ?>" placeholder="Nhập địa chỉ Email">
                                        <i><?php echo form_error('email'); ?></i>
                                    <td><input type="text" name="phone" value="<?php echo isset($user->phone) ? $user->phone : '' ?>" placeholder="Nhập số điện thoại">
                                        <i><?php echo form_error('phone'); ?></i>
                                    <td><input type="text" name="address" value="" placeholder="Nhập địa chỉ nhận hàng">
                                        <i><?php echo form_error('address'); ?></i>
                                <tr>
                                    <td><input type="text" name="message" value="" placeholder="Ghi chú thông tin giao hàng">
                                    </td>
                                </tr>
                            </form>
                        </div>
                        <div class="form-two">
                            <form>
                                <p> Phương thức thanh toán </p>
									
									<select>
										<option>-- Thanh toán khi nhận hàng --</option>
										<option>-- Thanh toán online --</option>
                                                                        </select>
                            
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"	>
                <div class="total_area">
                    <p style= "color: #696763; font-size: 20px;font-weight: 300;"> Thông tin đơn hàng </p>
                    <ul>
                        <li>Tạm tính<span><?php echo number_format($total_amount); ?> VNĐ</span></li>
                        <li>Phí vận chuyển <span>Miễn phí</span></li>
                        <li>Tổng tiền <span><?php echo number_format($total_amount); ?> VNĐ</span></li>
                    </ul>
                    <a class="btn btn-default update" href="<?php echo base_url('product/view'); ?>">Tiếp tục mua hàng </a>
                    <a class="btn btn-default check_out" href="<?php echo base_url('home/index'); ?>">Thanh toán</a>
                </div>
            </div>
            </div>
        </div>
    </div>
     
        
   

</section> <!--/#cart_items-->
