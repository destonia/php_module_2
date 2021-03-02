<?php

namespace App\Model;

use PDO;

class BookModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function findById($id)
    {
        $sql = "Select * FROM v_products_suppliers WHERE id = :id";
        //$sql = "Select * from orders where orderNumber = :orderNumber ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getDistinceSupplier()
    {
        $sql = "Select DISTINCT company FROM suppliers";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Sach ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function createBook($bookId, $bookName, $price, $publisher, $author, $copy, $category, $position)
    {
        $sql = 'INSERT INTO products (MaSach,TenSach,GiaTien,NhaXuatBan,TacGia,SoLuongBanSao,LoaiSach,Vitri) 
                VALUES (:book_id, :book_name, :price, :publisher, :author, :copy, :category, :position)';

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":book_id", $bookId);
        $stmt->bindParam(":book_name", $bookName);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":publisher", $publisher);
        $stmt->bindParam(":author", $author);
        $stmt->bindParam(":copy", $copy);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":position", $position);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function edit_product()
    {
        //UPDATE products set name = 'Tra Dao Cam Sa - vi dua hau' where product_id  = 9;
    }
}
