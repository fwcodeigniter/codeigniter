
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Giỏ hàng</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <h3>Thông tin giỏ hàng (Có <?php echo $total_items ?> sản phẩm)</h3>
            <?php if ($total_items > 0): ?>
                <form action="<?php echo base_url('cart/update'); ?>" method = post>
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image"></td>
                                <td class="name">Sản phẩm</td>
                                <td class="price">Đơn giá</td>
                                <td class="quantity">Số lượng</td>
                                <td class="total">Tổng tiền</td>
                                <td class = "delete">Xóa </td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php $total_amount = 0; ?>
                            <?php foreach ($carts as $rows): ?>
                                <?php $total_amount = $total_amount + $rows['subtotal'];
                                ?>
                                <tr>
                                    <td class="cart_product">
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href=""><?php echo $rows['name']; ?></a></h4>

                                    </td>
                                    <td class="cart_price">
                                        <p><?php echo $rows['price']; ?></p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">

                                            <input class="cart_quantity_input" type="text" name="qty_<?php echo $rows['id']; ?>" value="<?php echo $rows['qty']; ?>" autocomplete="off" size="2">

                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price"><?php echo number_format($rows['subtotal']); ?> VNĐ</p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href="<?php echo base_url('cart/del/' . $rows['id']); ?>"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?> 

                        </tbody>
                    </table>
            </div>
        </div>

    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="row">
                <div class="total_area">
                    <ul>
                        <li>Tạm tính<span><?php echo number_format($total_amount); ?> VNĐ</span></li>
                        <li>Phí vận chuyển <span>Miễn phí</span></li>
                        <li>Tổng tiền <span><?php echo number_format($total_amount); ?> VNĐ</span></li>
                    </ul>
                    <a class="btn btn-default check_out" href="<?php echo base_url('cart/del'); ?>">Xóa hết</a>

                    <a class="btn btn-default check_out" href="<?php echo base_url('order/checkout'); ?>">Thanh toán</a>

                </div>
            </div>
        </div>
    </section><!--/#do_action-->
    </from>
<?php else: ?>
    <h4>Không có sản phẩm nào trong giỏ hàng</h4>
<?php endif; ?>

