<?php include '../view/website/headerad.php'; ?>
<?php
$deltail = null;
$deltail = new Oder();
$order = new Oder();
$result=$order->getOrder($_GET['id']);
?>
<div class="container">
            <div class="col-md-12">
            <table class="table text-center">
                <tr>
                    <td>Mã hóa đơn</td>
                    <td>Tên sản phẩm</td>
                    <td>Số lượng</td>
                    <td>Đơn giá</td>
                    <td>Thành tiền</td>
                </tr>
                <?php                
                $orderdt=$deltail->getOderDetail($_GET['id']); 
                while($item=$orderdt->fetch()):
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