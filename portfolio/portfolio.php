<?php 
require '../db.php';
require '../login_check.php';

$select_port = "SELECT * FROM portfolios";
$portfolios = mysqli_query($db_connect, $select_port);
?>

<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Portfolio List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Class Name</th>
                        <th>Thumnail</th>
                        <th>Feature</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($portfolios as $port) {?>
                        <tr>
                            <td><?=$port['class_name']?></td>
                            <td>
                                <img width="50" src="../upload/portfolio/thum/<?=$port['thum']?>" alt="">
                            </td>
                            <td>
                            <img width="50" src="../upload/portfolio/feature/<?=$port['feature']?>" alt="">
                            </td>
                            <td>
                                <a href="port_delete.php?id=<?=$port['id']?>" class="btn btn-danger">Delete</a>
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
                <h3>Add Portfolio</h3>
            </div>
            <?php if(isset($_SESSION['port'])) {?>
                <div class="alert alert-success"><?=$_SESSION['port']?></div>
            <?php } unset($_SESSION['port'])?>
            <div class="card-body">
                <form action="port_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Class Name</label>
                        <input type="text" class="form-control" name="class_name">
                        <?php if(isset($_SESSION['class'])) {?>
                            <strong class="text-danger"><?=$_SESSION['class']?></strong>
                        <?php } unset($_SESSION['class'])?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Preview Image</label>
                        <input type="file" class="form-control" name="thum">
                        <?php if(isset($_SESSION['thum'])) {?>
                            <strong class="text-danger"><?=$_SESSION['thum']?></strong>
                        <?php } unset($_SESSION['thum'])?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gallery Image</label>
                        <input type="file" class="form-control" name="feature">
                        <?php if(isset($_SESSION['feature'])) {?>
                            <strong class="text-danger"><?=$_SESSION['feature']?></strong>
                        <?php } unset($_SESSION['feature'])?>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Add POrtfolio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>