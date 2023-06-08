<?php
require '../db.php';
require '../login_check.php';

$team_id = $_GET['id'];
$select_team = "SELECT * FROM team_info WHERE id=$team_id";
$team_res = mysqli_query($db_connect, $select_team);
$teams = mysqli_fetch_assoc($team_res)
?>

<?php require '../dashboard_parts/header.php'; ?>
<div class="row">

</div> <div class="col-lg-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Add Member</h3>
            </div>
            <?php if(isset($_SESSION['team'])) {?>
                <div class="alert alert-success"><?=$_SESSION['team']?></div>
            <?php } unset($_SESSION['team'])?>
            <?php if(isset($_SESSION['ext'])) {?>
                <div class="alert alert-danger"><?=$_SESSION['ext']?></div>
            <?php } unset($_SESSION['ext'])?>
            <div class="card-body">
                <form action="update_team.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="hidden" class="form-control" name="id" value="<?=$teams['id']?>">
                        <input type="text" class="form-control" name="name" value="<?=$teams['name']?>">
                        <?php if(isset($_SESSION['nam'])) {?>
                            <strong class="text-danger"><?=$_SESSION['nam']?></strong>
                        <?php } unset($_SESSION['nam'])?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Position</label>
                        <input type="text" class="form-control" name="position" value="<?=$teams['position']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descirption</label>
                        <input type="text" class="form-control" name="desp" value="<?=$teams['desp']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Update Team Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require '../dashboard_parts/footer.php'; ?>