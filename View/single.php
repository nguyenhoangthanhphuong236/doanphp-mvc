<!DOCTYPE html>
<html>

<head>
    <title>Xem chi tiết</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./Public/css/chitiet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./Public/css/styles.css">
    <link rel="stylesheet" href="./Public/css/chitiet.css">
</head>

<body onload="autoloading()">
    <!-- Section header -->
    <?php include_once './View/inc/header.php'; ?>
    <!-- end header -->

    <hr>
    <div class="container-fluid">
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-3">
                <img src="<?php echo $product->image; ?>" width="400px" height="400px">
            </div>
            <div class="col-md-4 offset-md-1">
                <div class="row" style="border-bottom: 1px solid #ddd; border-top: 1px solid #ddd;">
                    <span class="special-price">
                            <?php echo str_replace(',', '.', number_format($product->price)); ?>đ
                            <del class="price product-price-old" style="margin-left: 5px; color: #ADADAD; font-size: 0.5cm;">3.000.000đ</del>
                            <span class="discount" style="font-size: 0.5cm;">(-30%)</span>
                    </span>
                </div>
            </div>
            <div class="col-md-3 offset-md-1">
                <div class="row" style="border-bottom: 1px solid #ddd; border-top: 1px solid #ddd;">
                    <h1>Nội thất 2021</h1>
                </div>
            </div>
        </div>
    </div><!-- end container -->

    <div class="container-fluid text-center anhnen" style="margin-top: 30px">
        <h3 class="text-danger ykien">Ý kiến của khách hàng</h3>
        <div class="row text-center">
            <div class="col-md-4">
                <img class="rounded-circle" src="https://file.hstatic.net/1000388594/file/2-ao-so-mi-nu-co-tru-tay-bong-zavans-trang_b2ce6d13eb7446f6bae96ede39f0ede1.jpg" style="width: 200px; height: 200px">
                <p class="chitiet">Chất vải giúp tạo hình áo khá okela nhưng hơi sợ mặc vào nóng, có vẻ không thoáng lắm với da mình, nhưng nếu là ngồi phòng máy lạnh thì ổn hết.</p>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
            <div class="col-md-4">
                <img class="rounded-circle" src="https://product.hstatic.net/1000311467/product/sm40-4_2267d5fda5994bbab5714824ca80d2d6_master.jpg" style="width: 200px; height: 200px">
                <p class="chitiet">Áo form đẹp, mặt vải mịn, dày, đường may đẹp... màu có sậm hơn hình mẫu mặc... nhưng k thành vấn đề... màu rất đẹp... sẽ tiếp tục ủng hộ HN22.</p>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
            <div class="col-md-4">
                <img class="rounded-circle" src="https://file.hstatic.net/1000388594/file/ao-nu-cong-so-co-vest-mau-nude_96420c1f113a47229d9f7c19d1ebb816.jpg" style="width: 200px; height: 200px">
                <p class="chitiet">Áo form đẹp, đúng màu... chất vải dày dặn và mịn... chưa mặc thử nên k đánh giá dc là mát không nhưng nhìn chung là rất hài lòng</p>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <!-- footer -->
    <?php include_once './View/inc/footer.php' ?>
    <!-- end footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script type="text/javascript">
    function a1() {
        document.getElementById("h1").src = "./Public/images/coptop1.jpg"
    }

    function a2() {
        document.getElementById("h1").src = "./Public/images/croptop2.jpg"
    }

    function a3() {
        document.getElementById("h1").src = "./Public/images/croptop3.jpg"
    }
</script>

</html>