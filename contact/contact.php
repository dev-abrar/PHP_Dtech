<?php 
require '../db.php';
require '../login_check.php';

$select_mes = "SELECT * FROM messages";
$mes_res = mysqli_query($db_connect, $select_mes);
?>
<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Messages List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Messages</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($mes_res as $msg) {?>
                        <tr class="<?=($msg['status'] == 0)?'bg-light':''?>">
                            <td><?=$msg['name']?></td>
                            <td><?=$msg['email']?></td>
                            <td><?=substr($msg['message'], 0, 20).'...more'?></td>
                            <td>
                                <a href="msg_view.php?id=<?=$msg['id']?>" class="btn btn-success">View</a>
                                <a href="msg_delete.php?id=<?=$msg['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>