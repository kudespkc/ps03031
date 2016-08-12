<?php include '../view/website/header.php'; ?>    
<div id="list-new-item">
            <div class="container">
                <div class="header-label">
                    <h2>Sản phẩm mới</h2>
                </div>
                <div class="col-md-push-12">
                    <?php
                    $pro = new product();
                    $result = $pro->getProlist();
                    while($set = $result -> fetch()):
                    ?>
                    <div class="col-md-3">                  
                       <div class="product row-fluid fadeInDown animated">
                        <div class="images">
                            <img src="<?php echo '../view/website/images/'.$set[2]; ?>" class="img-responsive center-block max-height-image">
                        </div>
                        <div class="caption">
                            <a href="?action=product_detail&id=<?php echo $set[0]; ?>"><?php echo $set[1]; ?></a>
                        </div>
                        <div class="price">
                            <a>Giá: <?php echo number_format($set[4]); ?>₫</a>
                        </div>
                           <center><a class="btn btn-success addtocart" type="submit" href="?action=product_detail&id=<?php echo $set[0]; ?>">Chi tiết sản phẩm</a></center>
                        </div>
                    </form>
                    </div>
                    <?php  endwhile; ?>
                </div>
            </div>    
        </div>
    </section>
<?php include '../view/website/footer.php'; ?>