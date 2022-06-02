<?php
require_once './Model/ProductModel.php';

class HomeController
{

    private $productModel;

    const PHONG_KHACH = 1;
    const PHONG_NGU = 2;
    const PHONG_BEP = 3;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function invoke()
    {
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case 'home':
                    $this->homePage();
                    break;
                case 'single':
                    $this->singlePage();
                    break;
                case 'cart':
                    $this->cartPage();
                    break;
                case 'products':
                    $this->productPage();
                    break;
            }
        }
    }

    private function homePage()
    {
        $hotProductList =  $this->productModel->findHotProducts(); //sp nổi bật
        $productKhachList = $this->productModel->findByCategory(self::PHONG_KHACH);  //phòng khách
        $productNguList = $this->productModel->findByCategory(self::PHONG_NGU);  //phòng ngủ
        $productBepList = $this->productModel->findByCategory(self::PHONG_BEP);  //phòng bếp
        require_once './View/home.php';
    }

    private function singlePage()
    {
        $product = $this->productModel->find($_GET['id']);
        require_once './View/single.php';
    }

    private function cartPage()
    {
        $product = $this->productModel->find($_GET['id']);
        create_order($product->id, $product->name, $product->image, $product->price, 1);

        $productList = $_SESSION['cart'];

        require_once './View/cart.php';
    }
    private function productPage()
    {
        // $listVay = $this->productModel->findByCategory(1);
        // $listDam = $this->productModel->findByCategory(2);
        // $listQuan = $this->productModel->findByCategory(3);
        require_once './View/products.php';
    }
}
