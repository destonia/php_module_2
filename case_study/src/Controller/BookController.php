<?php

namespace App\Controller;

use App\Model\BookModel;

class BookController
{
    protected $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    public function index()
    {
        //Lấy tất hoá đơn từ DB ra
        $books = $this->bookModel->getAll();

        include "src/View/Book/book_list.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/View/Book/book_create.php";
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bookId = $_REQUEST['book_id'];
            $bookName = $_REQUEST['book_name'];
            $price = $_REQUEST['price'];
            $publisher = $_REQUEST['publisher'];
            $author = $_REQUEST['author'];
            $copy = $_REQUEST['copy'];
            $category = $_REQUEST['category'];
            $position = $_REQUEST['position'];

            $this->bookModel->createBook(
                $bookId,
                $bookName,
                $price,
                $publisher,
                $author,
                $copy,
                $category,
                $position

            );
            include "src/View/Book/book_create.php";

            $this->redirectToList();
        }
    }

    public function details()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $isNumberic = is_numeric( (int)isset($_REQUEST['id']));
            $product_id = isset($_REQUEST['id']);
            if ( $product_id && $isNumberic) {
                $product = $this->productModel->findById($product_id);
                $supplier_names = $this->productModel->getDistinceSupplier();
                include "src/View/product/product-details.php";
            } else {
                $this->redirectToList();
            }
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Update status

            // Update gia

            // Update so luong san pham

            // Update abc...

            //header("location:index.php?page=product-list");
        }
    }

    private function redirectToList()
    {
        $products = $this->productModel->getAll();
        header("location:index.php?page=product-list");
    }
}
