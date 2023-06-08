<?php 
require '../db.php';
require '../login_check.php';
?>
<?php require '../dashboard_parts/header.php'; ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-primary">
               <h3 class="text-white">Update Profile Information</h3>
            </div>
            <div class="card-body">
                <form action="profile_post.php" method="POST">
                <?php if(isset($_SESSION['update'])) {?>
                    <div class="alert alert-success"><?=$_SESSION['update']?></div>
                <?php } unset($_SESSION['update'])?>
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="id" value="<?=$after_assoc['id']?>">
                        <input type="text" class="form-control" name="name" value="<?=$after_assoc['name']?>">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" value="<?=$after_assoc['email']?>">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card" style="height: auto;">
                <div class="card-header bg-primary">
                <h3 class="text-white">Update Profile Information</h3>
                </div>
                <div class="card-body">
                    <form action="photo_update.php" method="POST" enctype="multipart/form-data">
                    <?php if(isset($_SESSION['up_photo'])) {?>
                        <div class="alert alert-success"><?=$_SESSION['up_photo']?></div>
                    <?php } unset($_SESSION['up_photo'])?>
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?=$after_assoc['id']?>">
                            <input type="file" class="form-control" name="photo">
                            <?php if(isset($_SESSION['photo'])) {?>
                                <strong class="text-danger"><?=$_SESSION['photo']?></strong>
                            <?php } unset($_SESSION['photo'])?>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>