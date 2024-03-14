<?php
class ProductModel {
    private $conn;
    private $table_name = "products";

    public function __construct($db) {
        $this->conn = $db;
    }

    function readAll() {
        $query = "SELECT id, name, description, price FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    //tương tự viết tiếp các hàm khác của Product cho CRUD
    //detail --> xem chi tiết SP dựa trên id
    //update --> cập nhật sản phẩm dựa trên id
    //delete --> xóa sản phẩm dựa trên id
    //create --> tạo mới 1 sản phẩm & lưu CSDL
}