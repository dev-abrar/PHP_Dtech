<?php 
require '../db.php';
require '../login_check.php';

$select_count = "SELECT * FROM counters";
$counter = mysqli_query($db_connect, $select_count);
$after_assoc_count = mysqli_fetch_assoc($counter);

?>

<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-6 m-auto">
    <div class="card">
            <div class="card-header">
                <h3>Edit Counter</h3>
            </div>
            <?php if(isset($_SESSION['count'])) {?>
                <div class="alert alert-success"><?=$_SESSION['count']?></div>
            <?php } unset($_SESSION['count'])?>
            <div class="card-body">
                <form action="counter_update.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Edit Number</label>
                        <input type="number" class="form-control" name="number" value="<?=$after_assoc_count['number']?>">
                        <input type="hidden" class="form-control" name="id" value="<?=$after_assoc_count['id']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edit Title</label>
                        <input type="text" class="form-control" name="title" value="<?=$after_assoc_count['title']?>">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update Counter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>