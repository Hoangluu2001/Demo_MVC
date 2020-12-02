<?php

?>
<h2>Detail bill: <?php echo 'DH-' . $bill[0]['orderNumber']  ?></h2>
<h4>Customer</h4>
<table class="table-list">
    <tr>
        <th>Name customer</th>
        <td><?php echo $bill[0]['customerName'] ?></td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><?php echo $bill[0]['phone'] ?></td>
    </tr>
    <tr>
        <th>Address</th>
        <td><?php echo $bill[0]['addressLine1'] ?></td>
    </tr>
</table>

<div class="status-bill">
    Status bill:
    <select name="" id="">
        <option
            <?php if ($bill[0]['status'] == 'Sipped'): ?>
                selected
            <?php endif; ?>
            value="0">Sipped</option>
        <option
            <?php if ($bill[0]['status'] == 'Cancelled'): ?>
                selected
            <?php endif; ?>
            value="1">Cancelled</option>
        <option
            <?php if ($bill[0]['status'] == 'Resolved'): ?>
                selected
            <?php endif; ?>
            value="2">Resolved</option>
    </select>
    <button>Update</button>
</div>


<h4>Products order</h4>

<table class="table-list">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Quantity</th>
    </tr>
    <?php foreach ($bill as $key => $item): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $item['productName']?></td>
            <td><?php echo $item['quantityOrdered'] ?></td>
        </tr>
    <?php endforeach; ?>


</table>
