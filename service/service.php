<?php 
require '../db.php';
require '../login_check.php';

$select = "SELECT * FROM services";
$servies = mysqli_query($db_connect, $select);
?>
<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Services List</h3>
            </div>
            <?php if(isset($_SESSION['ser_delete'])) {?>
                <div class="alert alert-success"><?=$_SESSION['ser_delete']?></div>
            <?php } unset($_SESSION['ser_delete'])?>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach($servies as $sl=>$service) {?>
                    <tr>
                        <td><?=$sl+1?></td>
                        <td> <i style="font-family: fontawesome; font-size: 24px;" class="fa <?=$service['icon']?>"></i> </td>
                        <td><?=substr($service['title'], 0,10)?></td>
                        <td><?=substr($service['desp'], 0,10)?></td>
                        <td>
                            <a href="edit_service.php?id=<?=$service['id']?>" class="btn btn-primary">Edit</a>
                            <a href="delete_service.php?id=<?=$service['id']?>" class="btn btn-danger">Delete</a>
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
                <h3>Add new Service</h3>
            </div>
            <?php 
                $fonts = array (
                    'fa-wordpress',
                    'fa-html5',
                    'fa-css3',
                    'fa-reddit-square',
                    'fa-ioxhost',
                    'fa-grav',
                    'fa-database',
                );
            ?>
            <div class="card-body">
                <form action="service_post.php" method="POST">
                    <?php foreach($fonts as $font) {?>
                        <i style="font-family: fontawesome; font-size: 24px;" class="fa <?=$font?>"></i>
                    <?php }?>    
                    <?php if(isset($_SESSION['ser'])) {?>
                        <div class="alert alert-success"><?=$_SESSION['ser']?></div>
                    <?php } unset($_SESSION['ser'])?>
                    <div class="mb-3">
                        <label class="form-label">Font Awesome</label>
                        <input type="text" name="icon" class="form-control" id="icon">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="desp"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require '../dashboard_parts/footer.php'; ?>
<script>
    $('.fa').click(function(){
        var icon = $(this).attr('class')
        $('#icon').attr('value', icon);
    });
</script>
