<?php include '../view/website/headerad.php'; ?>
<?php 
    if(!isset($_SESSION['cus_to_mer'])){
    header("Location:".$_SERVER['SCRIPT_NAME']."?action=login");
}?>
    <div class="container">
    <table class="table table-striped text-center">
         <tr>
            <td>Mã sản phẩm</td>
            <td>Tên sản phẩm</td>
            <td>Chi tiết</td>
            <td>Hình ảnh</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        <?php
        $list = new product();
        $result = $list->getProlist();
        while($set = $result -> fetch()):
        ?>
        <form method="post">
            <tr>
            <td><a href="?action=editpro&id=<?php echo  $set['ProId']; ?>"><?php echo  $set["ProId"]; ?></a></td> 
            <td><?php echo  $set["ProName"]; ?></td> 
            <td><textarea class="form-control" rows="3" ><?php echo $set['ProDes'] ?></textarea></td>
            <td><img src="<?php echo '../view/website/images/'.$set[2]; ?>" class="img-responsive center-block" style="max-width: 100px;"></td>
            <td><a class="btn btn-success" href="?action=editpro&id=<?php echo  $set['ProId']; ?>">Sửa</a></td> 
            <td><a class="btn btn-danger" href="?action=delete&id=<?php echo $set['ProId']; ?>">Xóa</a></td>
            </tr>
        </form>
        <?php endwhile; ?>
    </table>
    </div>