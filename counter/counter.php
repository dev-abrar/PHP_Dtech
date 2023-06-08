<?php 
require '../db.php';
require '../login_check.php';

$select_count = "SELECT * FROM counters";
$counter = mysqli_query($db_connect, $select_count);

?>
<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Counter List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Number</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach($counter as $sl=>$count) {?>
                        <tr>
                            <td><?=$sl+1?></td>
                            <td><?=$count['number']?></td>
                            <td><?=$count['title']?></td>
                            <td>
                                <a href="count_edit.php?id=<?=$count['id']?>" class="btn btn-success">Edit</a>
                                <a href="count_delete.php?id=<?=$count['id']?>" class="btn btn-danger">Delete</a>
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
                <h3>Add Counter</h3>
            </div>
            <?php if(isset($_SESSION['count'])) {?>
                <div class="alert alert-success"><?=$_SESSION['count']?></div>
            <?php } unset($_SESSION['count'])?>
            <div class="card-body">
                <form action="counter_post.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Add Number</label>
                        <input type="number" class="form-control" name="number">
                        <?php if(isset($_SESSION['num'])) {?>
                            <strong class="text-danger"><?=$_SESSION['num']?></strong>
                        <?php } unset($_SESSION['num'])?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Title</label>
                        <input type="text" class="form-control" name="title">
                        <?php if(isset($_SESSION['title'])) {?>
                            <strong class="text-danger"><?=$_SESSION['title']?></strong>
                        <?php } unset($_SESSION['title'])?>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Add Counter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>