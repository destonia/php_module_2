<?php
use App\Controller\BookController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$bookController = new BookController();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- <meta http-equiv="refresh" content="0"> -->

    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
<a href="index.php?page=book-create">Add book</a>
<br />
<a href="index.php?page=book-list">List of books</a>
<br />
<a href="index.php?page=dashboard">Show profits</a>
<?php
switch ($page) {
    // Neu o trang index co bien page va gia tri bang product-list thi goi vao product Controller, ham index
    case 'book-list':
        $bookController->index();
        break;
    case 'book-create':
        $bookController->create();
        break;
}
?>
</body>

</html>