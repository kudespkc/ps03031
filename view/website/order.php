<?php include '../view/website/header1.php'; ?>
        <div style="margin-left: 10px;">
            <?php 
           // print_r($_SESSION);
            $order_id = $_SESSION['oder_id'];
            $order = new Oder();
            $result=$order->getOrder($order_id);
            
            //print_r($result);
            $odi=$result['OrderId'];
            $dc=$result['Date'];
            $ctid=$result['UserId'];
            $d= new DateTime($dc);
            ?>
            <div class="container">
                <div class="col-md-12">
                    <div class="done center-block">
                        <h1 style="color:green;">Cảm ơn ! Bạn đã đặt hàng thành công.</h1>
                        <?php 
                        echo '<h3>Mã hóa đơn: '.$odi.'</h3>';
                        echo '<h5>Số ID KH: '.$ctid.'</h5>';
                        echo '<h5>Ngày lập hóa đơn: '.$dc.'</h5>';
                        ?>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="col-md-12">
            <table class="table">
                <tr>
                    <td>Mã hóa đơn</td>
                    <td>Tên sản phẩm</td>
                    <td>Số lượng</td>
                    <td>Đơn giá</td>
                    <td>Thành tiền</td>
                </tr>
                <?php                
                $result1=$order->getOderDetail($order_id); 
                while($item=$result1->fetch()):
                ?>
                <tr>
                    <td><?php echo  $item["OrderId"]; ?></td> 
                    <td><?php echo  $item["ProName"]; ?></td> 
                    <td><?php echo  $item ["Qty"]; ?></td> 
                    <td><?php echo  number_format($item["ProPrice"]); ?>₫</td> 
                    <td><?php echo  number_format($item["Total"]); ?>₫</td> 
                </tr>
                <?php endwhile; ?>
                <tr>
                    <td colspan='4' style="text-align: right; font-weight: bold;"> Tổng hóa đơn:</td>
                    <td style="color: red; font-weight: bold;"><?php echo number_format($result['Total']); ?>₫</td>
                </tr>
            </table>
            </div>
            </div>
        </div>
<?php include '../view/website/footer.php'; ?>