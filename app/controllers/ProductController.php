<?php
class ProductController {
    public function listProducts() {
        $database = new Database();
        $db = $database->getConnection();

        $product = new ProductModel($db);
        $stmt = $product->readAll();

        include_once 'app/views/product_list.php';
    }
    //Tương tự viết các action cho CRUD
    //lưu ý: Thêm 1 hình đại diện cho sản phẩm 
    //Thêm các view tương ứng
}