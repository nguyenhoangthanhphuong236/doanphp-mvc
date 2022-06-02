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
    <link rel="stylesheet" href="./Public/css/main.css">
</head>

<body onload="autoloading()">
    <!-- Section header -->
    <?php include_once './View/inc/header.php'; ?>
    <div class="container-fluid">
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-5 offset-md-1">
                <img id="h1" src="<?php echo $product->image; ?>" width="100%">
            </div>
            <div class="col-md-5 offset-md-1">
                <h1><?php echo $product->name; ?></h1>
                <p>Mã sản phẩm: <span class="btn" style="background: #CCCCCC">7512</span></p>

                <span class="special-price">
                    <span class="price product-price"><?php echo number_format($product->price, 3, ".", " "); ?>đ</span>
                </span>

                <span class="old-price">
                    <del class="price product-price-old">500.000đ</del>
                    <span class="discount">(-30%)</span>
                </span>
                <div class="row" style="margin-top: 30px">
                    <div class="col-md-6">
                        <form>
                            <tr>
                                <td><label for="major"><b>
                                            <h4> Kích thước: </h4>
                                        </b></label></td><br>
                                <td><select style="padding: 10px 150px 18px 12px">
                                        <option value="M">Size M</option>
                                        <option value="L">Size L</option>
                                    </select></td>
                            </tr>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <tr>
                                <td><label for="major"><b>
                                            <h4> Màu sắc: </h4>
                                        </b></label></td><br>
                                <td><select style="padding: 10px 150px 15px 12px">
                                        <option value="hoavan">Hoa văn</option>
                                        <option value="trang">Trắng</option>
                                        <option value="den">Đen</option>
                                        <option value="chamden">Chấm đen</option>
                                    </select></td>
                            </tr>
                        </form>
                    </div>
                </div>
                <hr>
                <hr>
                <div class="row" style="margin-top: 20px">
                    <div class="col-md-6">
                        <form>
                            <tr>
                                <td><label for="major"><b>
                                            <h6> Số lượng: </h6>
                                        </b></label></td><br>
                                <td><select style="padding: 10px 180px 15px 12px">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select></td>
                            </tr>
                        </form>
                    </div>
                    <div class="col-md-6" style="margin-top: 45px">
                        <a class="btn btn-default" href="order.php?id=<?php echo $product->id; ?>">Đặt hàng</a>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px">
                    <div class="col-md-4">
                        <img onclick="a1()" src="./Public/images/croptop1.jpg" width="100%">
                    </div>
                    <div class="col-md-4">
                        <img onclick="a2()" src="./Public/images/croptop2.jpg" width="100%">
                    </div>
                    <div class="col-md-4">
                        <img onclick="a3()" src="./Public/images/croptop3.jpg" width="100%">
                    </div>
                </div>
            </div>
            <!--end col-md-6-->
        </div>

        <div class="row" style="margin-top: 40px">
            <div class="col-md-7 offset-md-1">
                <p class="text-uppercase" style="font-size: 20px;"><strong>Thông tin cơ bản</strong></p>
                <hr>
                <p style="background: #CCCCCC; height: 40px; padding: 5px"><strong>Chất vải: </strong>Cotton trơn</p>
                <p><strong>Chiều dài áo: </strong>Trên rốn</p>
                <p style="background: #CCCCCC; height: 40px; padding: 5px"><strong>Chiều dài tay áo: </strong>Tay lửng</p>
                <p><strong>Họa tiết: </strong>Trơn</p>
                <p style="background: #CCCCCC; height: 40px; padding: 5px"><strong>Phong cách: </strong>Dễ thương</p>
                <p><strong>Kiểu cổ áo: </strong>Cổ tím</p>

                <p class="text-uppercase" style="font-size: 20px; margin-top: 20px"><strong>Thông tin chi tiết</strong></p>
                <hr>
                <p>HN22 xin kính chào quý khách!</p>
                <p>Xin mời quý khách xem bảng size ở bên dưới nhé</p>
                <abbr>-------------------------------</abbr><br>
                <strong>* Cách đặt nhiều sản phẩm vào cùng một đơn hàng:</strong>
                <p>- Quý khách muốn đặt 2 hoặc nhiều cáimà không cùng màu cùng size .. thì các bạn lần lượt chọn thêm vào giỏ hàng,rồi trở ra lại tiếp tục chọn sản phẩm tiếp theo phân loại hàng (Màu, Size) những áo muốn đặt, sau khi thêm xong vào giỏ hàng sẽ xuất hiện 2 mã hàng được phận loại màu sắc và size ạ . Tiếp theo nhấn MUA NGAY và điền thông tin thanh toán.</p>

                <strong>Áo sơ mi nữ công sở:</strong>
                <p>- Là mẫu áo đa phong cách, vì phần trên của croptop có thể được thiết kế như áo thun, áo len, áo sơ mi,... Tay áo có thể dài, ngắn, rộng, sát nách,... tuỳ theo sở thích cá nhân của mỗi người. Chiếc áo này mang đến cho các bạn gái sự năng động tự do .</p>
                <p>Sản phẩm thuộc BST vừa ra mắt tại thương hiệu HN22.<br>
                    Thiết kế tinh tế đến từng đường may, chất liệu mềm mại.<br>
                    Chất liệu sản phẩm cao cấp tôn dáng cực chuẩn.<br>
                    Phong cách trẻ trung, thanh lịch, sang trọng, , giúp bạn tự tin tỏa sáng khi xuất hiện.<br>
                    Tôn vinh thần thái, vẻ đẹp thanh lịch hiện đại, toát được nét dịu dàng, nữ tính vốn có của mình.</p>
            </div>
            <div class="col-md-3 offset-md-1">
                <p class="text-uppercase">Màu sắc</p>
                <hr>
                <div class="row">
                    <div class="col-md-2">
                        <img src="https://wikihoidap.org/upload/images/mau-xanh-luc-mau-cham-mau-lam-mau-tim-la-mau-gi-3.png" class="rounded-circle" width="100%" height="32">
                    </div>
                    <div class="col-md-2">
                        <img src="https://salt.tikicdn.com/cache/w444/ts/product/fe/20/75/8bf94b6745ba5d54e2f29db02a6979ed.PNG" class="rounded-circle" width="100%">
                    </div>
                    <div class="col-md-2">
                        <img src="https://salt.tikicdn.com/cache/w444/ts/product/6c/93/d0/a0b22f1c4fbce1443a1e9a90c12f24c1.PNG" class="rounded-circle" width="100%">
                    </div>
                    <div class="col-md-2">
                        <img src="http://img.ltwebstatic.com/images3_pi/2020/03/30/1585556531965e5d98ef5a432eab61147c16af31c6.webp" class="rounded-circle" width="100%">
                    </div>
                    <div class="col-md-2">
                        <img src="https://i.pinimg.com/1200x/4f/3b/4a/4f3b4a4218c0c087b6d79e7af7c062e3.jpg" class="rounded-circle" width="100%">
                    </div>
                    <div class="col-md-2">
                        <img src="https://i.pinimg.com/originals/42/f8/13/42f813e13498b42ac8f2d14674f1721c.png" class="rounded-circle" width="100%" height="32">
                    </div>
                </div>
                <div class="row" style="margin-top: 30px">
                    <div class="col-md-2">
                        <img src="https://media1.nguoiduatin.vn/thumb_x600x600/media/duong-thi-thu-nga/2018/04/09/mau-tim.jpg" class="rounded-circle" width="100%" height="32">
                    </div>
                    <div class="col-md-2">
                        <img src="https://salt.tikicdn.com/ts/product/19/62/87/dfaf0692ce220c838eb75d407fc9db65.png" class="rounded-circle" width="100%">
                    </div>
                    <div class="col-md-2">
                        <img src="https://genk.mediacdn.vn/thumb_w/600/2016/11349324-1685331671706633-667022670-n-1457155607213-crop-1457155622873.jpg" class="rounded-circle" width="100%" height="32">
                    </div>
                    <div class="col-md-2">
                        <img src="http://img.ltwebstatic.com/images3_pi/2020/03/30/1585556500fea3c570a8cdd3df14f20815c348872f.webp" class="rounded-circle" width="100%" height="32">
                    </div>
                    <div class="col-md-2">
                        <img src="https://vn112.com/wp-content/uploads/2018/01/pxsolidwhiteborderedsvg-15161310048lcp4.png" class="rounded-circle" width="100%" height="32">
                    </div>
                    <div class="col-md-2">
                        <img src="https://media1.nguoiduatin.vn/thumb_x600x600/media/duong-thi-thu-nga/2018/04/09/mau-cam.jpg" class="rounded-circle" width="100%" height="32">
                    </div>
                </div>
                <div class="row" style="margin-top: 30px">
                    <p class="text-uppercase">Phong cách</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="row align-items-center nho">
                                    <input type="checkbox">Cá tính
                                </div><br>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form>
                                <div class="row align-items-center nho">
                                    <input type="checkbox">Cơ bản
                                </div><br>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="row align-items-center nho">
                                    <input type="checkbox">Dễ thương
                                </div><br>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form>
                                <div class="row align-items-center nho">
                                    <input type="checkbox">Thanh lịch
                                </div><br>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="row align-items-center nho">
                                    <input type="checkbox">Giải trí
                                </div><br>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form>
                                <div class="row align-items-center nho">
                                    <input type="checkbox">Sẵn sàng
                                </div><br>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="btn-group-vertical">
                            <button type="button" class="btn btn-danger">Video</button>
                            <video src="videos/aosomi.mp4" width="330" height="300" controls=""></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <h3 class="text-center text-uppercase" style="font-size: 60px;">Bảng size</h3>
            <div class="col-md-6" style="margin-top: 34px;">
                <img src="https://www.vfestival.vn/wp-content/uploads/2019/01/size-thoi-trang-hnoss-1.jpg" width="100%" height="680">
            </div>
            <div class="col-md-6">
                <img src="https://salt.tikicdn.com/ts/tmp/0a/3d/30/a204d844d2438eb8e09ed6d006e79ab2.jpg" width="100%">
            </div>
        </div>
    </div>

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

    <!-- footer -->

    <?php include_once './View/inc/footer.php' ?>


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