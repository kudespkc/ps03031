<?php include '../view/website/headerad.php'; ?>
<?php
$pro = new product();
$product = $pro->getProId($_GET['id']);;
//print_r($product);
?>
<script>
            function change(){
                document.getElementById('file').click();
            }
</script>
<div class="container">
    <h2>Sửa sản phẩm</h2>
    <form action="?action=updateproduct" method="post" enctype='multipart/form-data'>
        <input type="hidden" class="form-control" id="name" name="txtId" value="<?php echo $product['ProId'] ?>">
        <div class="form-group"">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="name" name="txtName" value="<?php echo $product['ProName'] ?>">
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <img class="img-thumbnail img-responsive" src="../view/website/images/<?php echo $product['ProImage'] ?>" onclick="change()" style="cursor: pointer; max-height: 150px;"><br/>
            <input type="file" id="file" name="file" style="opacity:0; height:0px;width:0px;">
        </div>
        <div class="form-group">
            <label for="description">Nội dung:</label>
            <textarea class="form-control" rows="5" id="description" name="txtDes"><?php echo $product['ProDes'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="price">Giá:</label>
            <input type="text" class="form-control" id="price" name="txtPrice" value="<?php echo $product['ProPrice'] ?>">
        </div>
        <button type="submit" class="btn btn-success" value="submit">Sửa sản phẩm</button>
    </form>
</div>