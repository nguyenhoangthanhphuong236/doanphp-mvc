<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./Public/images/logo.png" />
    <link rel="stylesheet" href="./Public/css/products.css">
    <link rel="stylesheet" href="./Public/css/main.css">
    <title>Trang chủ</title>
</head>

<body onload="autoloading()">
    <!-- Section header -->
    <?php include_once './View/inc/header.php'; ?>
    <!--End section header-->

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="https://imgs.vietnamnet.vn/Images/2017/08/28/12/20170828120044-vay-dam-nu-1.jpg" class="thumbnail">
                    <img src="https://imgs.vietnamnet.vn/Images/2017/08/28/12/20170828120044-vay-dam-nu-1.jpg" width="100%" height="300">
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://vn-test-11.slatic.net/p/0d90b4c62fcde892b398868a5b6d78db.jpg" class="thumbnail">
                    <img src="https://vn-test-11.slatic.net/p/0d90b4c62fcde892b398868a5b6d78db.jpg" width="100%" height="300">
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://cf.shopee.vn/file/e903ad0c5a357af61d1a9a0543c56a64" class="thumbnail">
                    <img src="https://cf.shopee.vn/file/e903ad0c5a357af61d1a9a0543c56a64" width="100%" height="300">
                </a>
            </div>
        </div>

        <h1 class="text-center text-danger text-uppercase dam">Đầm nữ cao cấp</h1>
        <div class="row">
            <div class="col-md-6 offset-md-5 text-right" style="margin-top: 20px">
                <div class="tags">
                    <span class="text-1">Sắp xếp theo:</span>
                    <span class="custom-dropdown custom-dropdown-white">
                        <select id="mySelect">
                            <option value="manual">Sản phẩm nổi bật</option>
                            <option value="price-ascending">Giá: Tăng dần</option>
                            <option value="price-descending">Giá: Giảm dần</option>
                            <option value="title-ascending">Tên: A-Z</option>
                            <option value="title-descending">Tên: Z-A</option>
                            <option value="created-ascending">Cũ nhất</option>
                            <option value="created-descending">Mới nhất</option>
                            <option value="best-selling">Bán chạy nhất</option>
                        </select>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->

    <div class="container-fluid" style="padding-top: 10; background-color: rgb(255, 255, 255);">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- Vung du lieu -->
                            <?php
                            // var_dump($productList2); die();
                            foreach ($productList2 as $dress) { ?>
                                <div class="col-md-3">
                                    <div class="khoi text-center mau khung">
                                        <a href="<?php echo url_pattern('homeController', 'products', $dress->id); ?>">
                                            <img class="image" src="<?php echo $dress->image; ?>" width="85%" height="150px">
                                            <span><?php echo $dress->name; ?></span>
                                        </a>
                                        <p class="gia"><?php echo number_format($dress->price, 3, ".", " "); ?>đ</p>
                                        <button class="btn-outline-warning"><a href="<?php echo url_pattern('homeController', 'cart', $dress->id); ?>">Đặt hàng</a></button>
                                    </div>
                                </div>
                            <?php    } ?>
                            <!--<div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">
                                        <img src="https://cf.shopee.vn/file/8818a6397dd0dabf3a5eac13b6716872" alt="" width="100%">
                                        <span>Bàn trà gỗ tự nhiên ngăn kéo 5CBT-130</span>
                                    </a>
                                    <p>5.500.000đ</p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">
                                        <img src="img/ke-ti-vi-phong-khach-doc-dao-600x600.jpg" alt="" width="100%">
                                        <span>Kệ tivi phòng khách độc đáo 5CKT-17</span>
                                    </a>
                                    <p>8.250.000₫</p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">
                                        <div class="text1">
                                            <span>-23%</span>
                                        </div>
                                        <img src="img/ke-tivi-go-tu-nhien-chan-cao-kt168-600x6001" alt="" width="100%">
                                        <span>Kệ tivi gỗ tự nhiên 5CKT-168</span>
                                    </a>
                                    <p>7.860.000₫ <del class="t2 text-secondary">10.200.000₫</del></p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">

                                        <img src="img/sofa-giuong-co-banh-xe-sf193-600x600-12" alt="" width="100%">
                                        <span>Sofa giường có bánh xe 5CSF-193</span>
                                    </a>
                                    <p>10.500.000₫ </p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">
                                        <div class="text1">
                                            <span>-16%</span>
                                        </div>
                                        <img src="img/ban-tra-go-tu-nhien-bt136-600x600.jpg" alt="" width="100%">
                                        <span>Bàn trà gỗ tự nhiên</span>
                                    </a>
                                    <p>6.590.000đ <del class="t2 text-secondary">7.800.000đ</del></p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">
                                        <div class="text1">
                                            <span>-19%</span>
                                        </div>
                                        <img src="img/fileminimizer-2-5f7d3361-afa9-4759-af7c-a39d2419c0e0 -3" alt="" width="100%">
                                        <span>Sofa phòng khách 5CSF-130</span>
                                    </a>
                                    <p>8.000.000₫ <del class="t2 text-secondary">9.860.000₫</del> </p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">

                                        <img src="img/s1ofa-giuong-sf194-600x600" alt="" width="100%">
                                        <span>Sofa giường 5CSF-194</span>
                                    </a>
                                    <p>15.200.000₫ </p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">

                                        <img src="img/sofa-ni-sang-trong-sf196-600x600-14" alt="" width="100%">
                                        <span>Sofa nỉ sang trọng 5CSF-196</span>
                                    </a>
                                    <p>13.800.000₫</p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>-->

                        </div> <!-- end row -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->

                <!--<div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">

                                        <img src="img/sofa-vang-ni-sf198-600x600.jpg" alt="" width="100%">
                                        <span>Sofa văng nỉ 5CSF-198</span>
                                    </a>
                                    <p>11.800.000₫</p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">

                                        <img src="img/g1iuong-go-cong-nghiep-g63-600x600" alt="" width="100%">
                                        <span>Giường gỗ công nghiệp</span>
                                    </a>
                                    <p> 8.400.000₫ </p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">
                                        <div class="text1">
                                            <span>-22%</span>
                                        </div>
                                        <img src="img/giuong-boc-da-g62-600x600.jpg" alt="" width="100%">
                                        <span>Giường bọc da</span>
                                    </a>
                                    <p>12.300.000₫ <del class="t2 text-secondary">15.800.000₫</del> </p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="khoi text-center mau khung">
                                    <a href="#">
                                        <div class="text1">
                                            <span>-17%</span>
                                        </div>
                                        <img src="img/b2an-trang-diem-modun-btd26-600x600 (1)" alt="" width="100%">
                                        <span>Bàn trang điểm module</span>
                                    </a>
                                    <p>4.850.000₫ <del class="t2 text-secondary">5.860.000₫</del> </p>
                                    <button class="btn-outline-warning"> <a href="#">Chi tiết</a></button>
                                    <button class=" btn-outline-warning"><a href="#">Mua hàng</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div><!-- end col-md-9 -->
            
            <div class="col-md-3">
                <div class="khoi">
                    <a href="#">
                        <h4 class="price-box"> Nội thất 2020 </h4>
                    </a>
                    <div class="row">
                        <div class="khung-content">
                            <a class=" col-md-12" href="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="khoi">
                                            <img src="img/noidung-1" alt="" width="100%">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="khoi">
                                            <strong> Nội thất biệt thự mang phong các...</strong> <br>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="ngaythang col-md-6 offset-md-4">08/07/2020</a>
                        </div>
                        <div class="khung-content">
                            <a class=" col-md-12" href="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="khoi">
                                            <img src="img/6-650x339.jpg" alt="" width="100%">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="khoi">
                                            <strong> Thiết kế phòng bếp hiện đại 2020</strong> <br>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="ngaythang col-md-6 offset-md-4">08/07/2020</a>
                        </div>
                        <div class="khung-content">
                            <a class=" col-md-12" href="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="khoi">
                                            <img src="img/noidung-2" alt="" width="100%">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="khoi">
                                            <strong> Nội thất phòng khách nhập khẩu...</strong> <br>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="ngaythang col-md-6 offset-md-4">08/07/2020</a>
                        </div>
                        <div class="khung-content">
                            <a class=" col-md-12" href="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="khoi">
                                            <img src="img/noidung-3" alt="" width="100%">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="khoi">
                                            <strong>Thiết kế phòng khách tinh tế và..</strong> <br>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="ngaythang col-md-6 offset-md-4">08/07/2020</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->

    <!-- footer -->
    <?php include_once './View/inc/footer.php' ?>
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>