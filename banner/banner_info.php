<?php 
require '../db.php';
require '../login_check.php';

$ban_info = "SELECT * FROM banners";
$ban_res = mysqli_query($db_connect, $ban_info);
$after_assoc_ban = mysqli_fetch_assoc($ban_res);

?>

<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Banner Information</h3>
            </div>
            <?php if(isset($_SESSION['ban_suc'])) {?>
                    <div class="alert alert-success"><?=$_SESSION['ban_suc']?></div>
                <?php } unset($_SESSION['ban_suc'])?>
            <div class="card-body">
                <form action="banner_post.php" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?=$after_assoc_ban['id']?>">
                        <input type="text" class="form-control" name="head_one" value="<?=$after_assoc_ban['head_one']?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="head_two" value="<?=$after_assoc_ban['head_two']?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="head_three" value="<?=$after_assoc_ban['head_three']?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="head_four" value="<?=$after_assoc_ban['head_four']?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="pera_one" value="<?=$after_assoc_ban['pera_one']?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="pera_two" value="<?=$after_assoc_ban['pera_two']?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>