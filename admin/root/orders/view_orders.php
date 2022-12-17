<?php
require_once('./db/connect.php');
$sql = "SELECT * FROM `order`";
$result = mysqli_query($connect, $sql);
?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>guest_id</th>
                <th>name_receiv</th>
                <th>phone_receiv</th>
                <th>address_receiv</th>
                <th>sum_pri</th>
                <th>status</th>
                <th>date_time</th>
                <th>Xem</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (is_array($result) || is_object($result)) foreach ($result as $value) : ?>
                <tr>
                    <td>
                        <p><?php echo $value['id'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['guest_id'] ?></p>
                    </td>
                    <td><?php echo $value['name_receiv'] ?></td>
                    <td>
                        <p><?php echo $value['phone_receiv'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['address_receiv'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['sum_pri'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['status'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['date_time'] ?></p>
                    </td>
                    

                    
                    <td>
                        <a href="./orders/view_order.php?id=<?php echo $value['id'] ?>"><span class="fa fa-eye" style="color: #e28585;"></span></a>
                    </td>
                    <td>
                        <a href="./orders/edit_order.php?id=<?php echo $value['id'] ?>"><span class="fa fa-pencil" style="color: #e28585;"></a>
                    </td>
                    <td>
                        <form action="./orders/code.php" method="POST" class="d-inline">
                            <button type="submit" name="delete" value="<?php echo $value['id'] ?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>