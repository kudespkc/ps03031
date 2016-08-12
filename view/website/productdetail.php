<?php include '../view/website/header1.php'; ?>    
<?php
$deltail = null;
$deltail = new product();
$pro = $deltail->getProId($_GET['id']);
?>
<div id="list-new-item">
            <div class="container">
                <div class="col-md-push-12 header-label">
                    <h2>Chi tiết sản phẩm</h2>
                </div>
                <div class="col-md-push-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                               <img src="<?php echo '../view/website/images/'.$pro[2]; ?>" class="img-responsive center-block detail-max-height-image">
                            </div>
                            <div class="col-md-6">
                                <form action="../controller/index.php" method="post">
                                <input type="hidden" name="action" value="add_cart"/>
                                <input type="hidden" name ="productkey" value ="<?php echo $pro[0]; ?>"/>
                                <div class="detail-name">
                                <h3><?php echo $pro[1]; ?></h3>
                                </div>
                                <p class="detail-content"><?php echo $pro[3]; ?></p>
                                <p class="detail-price"><?php echo number_format($pro[4]); ?> ₫</p>
                                <select name="itemqty">
                                <?php 
                                for ($i=1; $i<=10;$i++):
                                ?>
                                <option value="<?php echo $i; ?>">
                                <?php echo $i; ?>
                                </option>
                                <?php endfor; ?>
                                </select>
                                <button class="btn btn-success addtocart" type="submit">Thêm vào giỏ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?php include '../view/website/footer.php'; ?>