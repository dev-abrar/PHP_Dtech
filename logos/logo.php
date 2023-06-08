<?php 
require '../db.php';
require '../login_check.php';

$select = "SELECT * FROM logos";
$select_res = mysqli_query($db_connect, $select);
?>

<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Logo List</h3>
            </div>
            <?php if(isset($_SESSION['logo_delete'])){?>
                <div class="alert alert-success"><?=$_SESSION['logo_delete']?></div>
            <?php } unset($_SESSION['logo_delete'])?>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Logo</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_res as $sl=>$logo) {?>
                    <tr>
                        <td><?=$sl+1?></td>
                        <td><img src="../upload/logo/<?=$logo['logo']?>" width="100" alt=""></td>
                        <td><a href="logo_status.php?id=<?=$logo['id']?>" class="btn btn-<?=$logo['status']==1?'success':'light'?>"><?=$logo['status']==1?'Active':'Deactive'?></a></td>
                        <td>
                            <a href="logo_delete.php?id=<?=$logo['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card" style="height: auto;">
            <div class="card-header bg-primary">
                <h3 class="text-white">Add New Logos</h3>
            </div>
            <?php if(isset($_SESSION['up_logo'])){?>
                <div class="alert alert-success"><?=$_SESSION['up_logo']?></div>
            <?php } unset($_SESSION['up_logo'])?>
            <div class="card-body">
                <form action="logo_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" name="logo" class="form-control">
                        <?php if(isset($_SESSION['error'])){?>
                            <strong class="text-danger"><?=$_SESSION['error']?></strong>
                        <?php } unset($_SESSION['error'])?>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Add Logo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>