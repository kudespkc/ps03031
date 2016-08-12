<?php include '../view/website/headerad.php'; ?>
<div class="container">
<table class="table table-striped text-center">
     <tr>
        <td>Mã hóa đơn</td>
        <td>Ngày</td>
        <td>Tổng tiền</td>
        <td>Id Khách hàng</td>
    </tr>
    <?php
    $list = new Oder();
    $result = $list->getlistorder();
    while($set = $result -> fetch()):
    ?>
    <form method="post">
        <tr>
            <td><a href="?action=order_detail&id=<?php echo  $set['OrderId']; ?>"><?php echo  $set["OrderId"]; ?></a></td> 
        <td><?php echo  $set["Date"]; ?></td> 
        <td><?php echo  number_format($set["Total"]); ?>₫</td>
        <td><?php echo  $set["UserId"]; ?></td> 
        </tr>
    </form>
    <?php endwhile; ?>
</table>
</div>