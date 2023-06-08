<?php 
require '../db.php';
require '../login_check.php';

$id = $_SESSION['id'];
$select = "SELECT * FROM users WHERE id!=$id";
$users = mysqli_query($db_connect, $select);

?>

<?php require '../dashboard_parts/header.php' ?>

<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>User List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Images</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach($users as $sl=>$user) {?>
                    <tr>
                        <td><?=$sl+1?></td>
                        <td><?=$user['name']?></td>
                        <td><?=$user['email']?></td>
                        <td>
                        <?php if($user['photo'] == null) {?>
                            <img src="/Dominy/Dashboard_asset/images/profile/17.jpg" width="50" alt=""/>
                            <?php } else{?>
                            <img src="/Dominy/upload/user/<?=$user['photo']?>" width="50" alt=""/>
                            <?php }?>
                        
                        </td>
                        <td>
                            <a href="delete.php?id=<?=$user['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require '../dashboard_parts/footer.php' ?>