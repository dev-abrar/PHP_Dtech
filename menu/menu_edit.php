<?php 
require '../db.php';
require '../login_check.php';

$id = $_GET['id'];
$menu = "SELECT * FROM menus WHERE id=$id";
$menu_res = mysqli_query($db_connect, $menu);
$menus = mysqli_fetch_assoc($menu_res);
?>

<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-6 m-auto">
    <div class="card">
            <div class="card-header">
                <h3>Add Menu</h3>
            </div>
            <?php if(isset($_SESSION['up_menu'])) {?>
                <div class="alert alert-success"><?=$_SESSION['up_menu']?></div>
            <?php } unset($_SESSION['up_menu'])?>
            <div class="card-body">
                <form action="update_menu.php" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?=$menus['id']?>">
                        <label class="form-label"> Menu Name</label>
                        <input type="text" class="form-control" name="menu_name" value="<?=$menus['menu_name']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Menu Link</label>
                        <input type="text" class="form-control" name="menu_link" value="<?=$menus['menu_link']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Menu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>