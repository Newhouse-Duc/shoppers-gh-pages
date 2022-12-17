<?php
require_once('./db/connect.php');
$sql = "select * from guest";
$result = mysqli_query($connect, $sql);
?>
<a href="./users/create.php" style="float: right; background-color: #e28585;" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>email </th>
                <th>password</th>
                <th>phone</th>
                <th>address</th>       
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
                        <p><?php echo $value['name'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['email'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['password'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['phone'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $value['address'] ?></p>
                    </td>
                    <td>
                        <a href="./users/view.php?id=<?php echo $value['id'] ?>"><span class="fa fa-eye"></span></a>
                    </td>
                    <td>
                        <a href="./users/edit.php?id=<?php echo $value['id'] ?>"><span class="fa fa-pencil" style="color: #e28585;"></a>
                    </td>
                    <td>
                        <!-- <a href="./admin/root/users/delete_register.php?id=<?php echo $value['id'] ?>"><span class="fa fa-trash" style="color: #e28585;"></span></a> -->
                        <form action="./users/code.php" method="POST" class="d-inline">
                            <button type="submit" name="delete" value="<?php echo $value['id'] ?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>