
<table class ="table-list">

    <tr>
        <th> STT</th>
        <th> Order code</th>
        <th> Order date</th>
        <th> Status</th>
        <th> Total </th>
    </tr>
    <?php foreach ( $bills as $key => $bill) :?>
    <tr>
        <td><?php echo  ++$key ?></td>
        <td>
            <a href="index.php?page=show-bill&id=<?php echo $bill['orderNumber'] ?>">
                <?php echo  'DH-' . $bill['orderNumber'] ?>
            </a>
        </td>
        <td> <?php echo  $bill['orderDate'] ?></td>
        <td> <?php echo  $bill['status'] ?></td>
<!--        <td>--><?php //echo $this->TotalEachOrder($bill['orderNumber'][0]['Total']) ?><!--</td>-->

        <td><?php echo $this->TotalEachOrder($bill['orderNumber'])[0]['Tongtien'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
