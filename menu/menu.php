<?php 
require '../db.php';
require '../login_check.php';

$menus = "SELECT * FROM menus";
$men_res = mysqli_query($db_connect, $menus);
?>
<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Menu List</h3>
            </div>
            <?php if(isset($_SESSION['menu_delete'])) {?>
                <div class="alert alert-success"><?=$_SESSION['menu_delete']?></div>
            <?php } unset($_SESSION['menu_delete'])?>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Sl</th>
                        <th>Menu Name</th>
                        <th>Menu Link</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach($men_res as $sl=>$menu) {?>
                    <tr>
                        <td><?=$menu['id']?></td>
                        <td><?=$menu['menu_name']?></td>
                        <td><?=$menu['menu_link']?></td>
                        <td>
                            <a href="menu_edit.php?id=<?=$menu['id']?>" class="btn btn-primary">Edit</a>
                            <a href="menu_delete.php?id=<?=$menu['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Menu</h3>
            </div>
            <?php if(isset($_SESSION['menu'])) {?>
                <div class="alert alert-success"><?=$_SESSION['menu']?></div>
            <?php } unset($_SESSION['menu'])?>
            <div class="card-body">
                <form action="menu_post.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label"> Menu Name</label>
                        <input type="text" class="form-control" name="menu_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Menu Link</label>
                        <input type="text" class="form-control" name="menu_link">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Menu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>