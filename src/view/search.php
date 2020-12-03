<div>
    <form method="post">
        <label>Product Name:</label>
        <input type="text" value="" placeholder="name.." name="product_name" />
        <input type="text" value="" placeholder="order code.." name="order_code" />
        <input type="text" value="" placeholder="price.." name="price" />
        <p>
            <input type="submit" value="[submit]" />
        </p>
    </form>
</div>

<table class="table-list">
    <tr>
        <th>STT</th>
        <th>Order code</th>
        <th>Order date</th>
        <th>Status</th>
        <th>Product Name</th>
        <th>Product Price</th>
    </tr>


    <?php foreach ($bills as $key => $bill): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td>
                <a href="index.php?page=show-bill&id=<?php echo $bill['orderNumber'] ?>">
                    <?php echo 'DH-' . $bill['orderNumber'] ?>
                </a>
            </td>
            <td><?php echo $bill['orderDate'] ?></td>
            <td><?php echo $bill['status'] ?></td>
            <td><?php echo $bill['productName'] ?></td>
            <td><?php echo $bill['buyPrice'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>