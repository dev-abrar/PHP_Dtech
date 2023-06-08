<?php 
session_start();
require '../db.php';
require '../login_check.php';

$select_test = "SELECT * FROM tests";
$tests = mysqli_query($db_connect, $select_test);
?>

<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Testimonial List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach($tests as $test) {?>
                        <tr>
                            <td><?=$test['title']?></td>
                            <td><?=$test['desp']?></td>
                            <td>
                                <img width="100" src="../upload/test/<?=$test['img']?>" alt="">
                            </td>
                            <td>
                                <a href="test_delete.php?id=<?=$test['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>    
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Testimonial</h3>
            </div>
            <?php if(isset($_SESSION['all'])) {?>
                <div class="alert alert-success"><?=$_SESSION['all']?></div>
            <?php } unset($_SESSION['all'])?>
            <div class="card-body">
                <form action="test_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                        <?php if(isset($_SESSION['title'])) {?>
                            <strong class="text-danger"><?=$_SESSION['title']?></strong>
                        <?php } unset($_SESSION['title'])?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="desp" class="form-control"></textarea>
                        <?php if(isset($_SESSION['desp'])) {?>
                            <strong class="text-danger"><?=$_SESSION['desp']?></strong>
                        <?php } unset($_SESSION['desp'])?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Image</label>
                        <input type="file" class="form-control" name="img">
                        <?php if(isset($_SESSION['photo'])) {?>
                            <strong class="text-danger"><?=$_SESSION['photo']?></strong>
                        <?php } unset($_SESSION['photo'])?>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Add Testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php';?>