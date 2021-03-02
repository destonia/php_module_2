<table>
    <tr>
        <th>No</th>
        <th>Id</th>
        <th>Name</th>
        <th>Publisher</th>
        <th>Author</th>
        <th>Numer of Copies</th>
        <th>Price</th>
        <th>Position</th>
        <th>Type</th>
        <th>Image</th>
    </tr>
    <?php foreach ($books as $key => $book) : ?>
        <tr>
            <td> ?php echo ++$key ?></td>
            <td><?php echo $book['MaSach'] ?></td>
            <td><?php echo $book['TenSach'] ?></td>
            <td><?php echo $book['NhaXuatBan'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

