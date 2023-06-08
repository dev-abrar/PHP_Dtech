<?php
require '../db.php';
require '../login_check.php';

$select_team = "SELECT * FROM team_info";
$team_res = mysqli_query($db_connect, $select_team);

$icon_res = "SELECT * FROM team_icons";
$icons = mysqli_query($db_connect, $icon_res);

?>

<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-4">
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
                <form action="team_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                        <?php if(isset($_SESSION['nam'])) {?>
                            <strong class="text-danger"><?=$_SESSION['nam']?></strong>
                        <?php } unset($_SESSION['nam'])?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Position</label>
                        <input type="text" class="form-control" name="position">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descirption</label>
                        <input type="text" class="form-control" name="desp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Add Team Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card" style="height: auto";>
            <div class="card-header">
                <h3>Add Member</h3>
            </div>
            <?php if(isset($_SESSION['icon'])) {?>
                <div class="alert alert-success"><?=$_SESSION['icon']?></div>
            <?php } unset($_SESSION['icon'])?>
            <div class="card-body">
            <?php 
                $fonts = array (
                    'fa-envelope',
                    'fa-facebook-f',
                    'fa-twitter',
                    'fa-linkedin',
                    'fa-dribbble',
                    'fa-youtube',
                );
                ?>
                <form action="team_icon.php" method="POST">
                <?php foreach($fonts as $font) {?>
                        <i style="font-family: fontawesome; font-size: 24px;" class="fa <?=$font?>"></i>
                    <?php }?>  
                    <div class="mb-3">
                        <input type="text" class="form-control" name="icon" id="icon">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Add Team Icon </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card" id="card">
            <div class="card-header">
                <h3>Team Info</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($team_res as $team) {?>
                        <tr>
                            <td><?=$team['name']?></td>
                            <td><?=$team['position']?></td>
                            <td>
                                <img width="50" src="../upload/team/<?=$team['img']?>" alt="">
                            </td>
                            <td>
                                <a href="team_edit.php?id=<?=$team['id']?>" class="btn btn-primary">Edit</a>
                                <a href="team_delete.php?id=<?=$team['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card" id="icons">
            <div class="card-header">
                <h3>Team Icon</h3>
            </div>
            <?php if(isset($_SESSION['limit'])) {?>
                <div class="alert alert-danger"><?=$_SESSION['limit']?></div>
            <?php } unset($_SESSION['limit'])?>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($icons as $sl=>$icon) {?>
                        <tr>
                            <td><?=$sl+1?></td>
                            <td><?=$icon['icon']?></td>
                            <td>
                                <a href="icon_delete.php?id=<?=$icon['id']?>" class="btn btn-danger">Delete</a>
                                <a href="icon_status.php?id=<?=$icon['id']?>" class="btn btn-<?=$icon['status'] == 0?'light':'success'?>"><?=$icon['status'] == 0?'Deactive':'Active'?></a>
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require '../dashboard_parts/footer.php'; ?>
<script>
    $('.fa').click(function(){
        var icon = $(this).attr('class');
        $('#icon').attr('value', icon);
    });
</script>