<?php 
require '../db.php';
require '../login_check.php';

$top = "SELECT * FROM about_tops";
$top_res = mysqli_query($db_connect, $top);
$tops = mysqli_fetch_assoc($top_res);

$left = "SELECT * FROM about_lefts";
$left_res = mysqli_query($db_connect, $left);
$lefts = mysqli_fetch_assoc($left_res);

$right = "SELECT * FROM about_rights";
$right_res = mysqli_query($db_connect, $right);
$rights = mysqli_fetch_assoc($right_res);

$bottom = "SELECT * FROM about_bottoms";
$bottom_res = mysqli_query($db_connect, $bottom);
$bottoms = mysqli_fetch_assoc($bottom_res);

?>

<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-6 mb-5">
        <div class="card-header">
            <h3>Edit About Top Information</h3>
        </div>
        <?php if(isset($_SESSION['top'])) {?>
            <div class="alert alert-success"><?=$_SESSION['top']?></div>
        <?php } unset($_SESSION['top'])?>
        <div class="card-body">
            <form action="top.php" method="POST">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?=$tops['id']?>">
                <input type="text" class="form-control" name="title" value="<?=$tops['title']?>">
            </div>
            <div class="mb-3">
                <textarea name="desp" class="form-control"><?=$tops['desp']?></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 mb-5">
        <div class="card-header">
            <h3>Edit About Left Information</h3>
        </div>
        <?php if(isset($_SESSION['left'])) {?>
            <div class="alert alert-success"><?=$_SESSION['left']?></div>
        <?php } unset($_SESSION['left'])?>
        <div class="card-body">
            <form action="left.php" method="POST">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?=$lefts['id']?>">
                <input type="text" class="form-control" name="title" value="<?=$lefts['title']?>">
            </div>
            <div class="mb-3">
                <textarea name="desp" class="form-control"><?=$lefts['desp']?></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 mb-5">
        <div class="card-header">
            <h3>Edit About Right Information</h3>
        </div>
        <?php if(isset($_SESSION['right'])) {?>
            <div class="alert alert-success"><?=$_SESSION['right']?></div>
        <?php } unset($_SESSION['right'])?>
        <div class="card-body">
            <form action="right.php" method="POST">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?=$rights['id']?>">
                <input type="text" class="form-control" name="title" value="<?=$rights['title']?>">
            </div>
            <div class="mb-3">
                <textarea name="desp" class="form-control"><?=$rights['desp']?></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 mb-5">
        <div class="card-header">
            <h3>Edit About Bottom Information</h3>
        </div>
        <?php if(isset($_SESSION['bottom'])) {?>
            <div class="alert alert-success"><?=$_SESSION['bottom']?></div>
        <?php } unset($_SESSION['bottom'])?>
        <div class="card-body">
            <form action="bottom.php" method="POST">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?=$bottoms['id']?>">
                <input type="text" class="form-control" name="title" value="<?=$bottoms['title']?>">
            </div>
            <div class="mb-3">
                <textarea name="desp" class="form-control"><?=$bottoms['desp']?></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>