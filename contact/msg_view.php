<?php 
require '../db.php';
require '../login_check.php';

$id = $_GET['id'];

$update = "UPDATE messages SET status=1 WHERE id=$id";
mysqli_query($db_connect, $update);

$select_mes = "SELECT * FROM messages WHERE id=$id";
$mes_res = mysqli_query($db_connect, $select_mes);
$msg_assoc = mysqli_fetch_assoc($mes_res);
?>
<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td><?=$msg_assoc['name']?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?=$msg_assoc['email']?></td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td><?=$msg_assoc['message']?></td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>