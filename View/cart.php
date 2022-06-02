<?php
require_once './Helpers/functions.php';

$products = getOrdersBySession();
?>
    <table class="table" border="1">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
            <tr>
                <th scope="row">1</th>
                <td>
                    <img style="width: 50px; height: 50px;" src="<?php echo $product['image']; ?>" alt="">
                </td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['quantity']; ?></td>
            </tr>
            <?php    } ?>
        </tbody>
    </table>