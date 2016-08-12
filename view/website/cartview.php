<?php include '../view/website/header1.php'; ?>
        <div class="container">
            <div class="item-title clearfix">
            <h3 class="left">Giỏ hàng</h3>
            </div>        <?php if(!isset($_SESSION['cart']) || count($_SESSION['cart'])== 0 ): ?>
        <p style="color: red;">Giỏ hàng trống, vui lòng chọn sản phẩm ! <a href="index.php?action=home">Click here.</a></p>
        <?php else: ?>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="update_cart"/>
            <table class="table">
                <tr>
                    <td>Item Name</td>
                     <td>Price</td> 
                     <td>Quantity</td>
                     <td>ItemTotal</td>
                      
                </tr>
                <?php 
                        foreach ($_SESSION['cart'] as $key =>$item):
                           
                            $cost = number_format($item['cost']);
                        $total = number_format($item['total']);
                      
                ?>
                <tr>
                    <td>
                        <?php echo $item['name'];?>
                    </td>
                    <td>
                        <?php echo $cost ?>
                    </td>
                    <td>
                        <input type="text" name ="newqty[<?php echo $key; ?>]" value ="<?php echo $item['qty']; ?>"/>
                    </td>
                    <td>
                        <?php echo $total; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" style="text-align: right;">
                        <b>Sub Total</b>
                    </td>
                    <td>
                        <?php echo get_subtotal(); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right;">
                        <input class="btn btn-default" type="submit" value="Update Cart"/>
                        <a class="btn btn-default" href="?action=order" style="color: #000; text-decoration: none;">Thanh Toán</a>
                    </td>
                </tr>
            </table>
            <p>Chon "Update Cart" để cập nhập số lượng hàng. Chon 0 để loại bỏ mặt hàng.</p>
        </form>
        <?php endif; ?>
        <p><a href="?action=home">Add Item</a></p>
        <p><a href="?action=empty_cart">Empty Cart</a></p>
        </div>
<?php include '../view/website/footer.php'; ?>
