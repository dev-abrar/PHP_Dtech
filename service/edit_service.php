<?php 
require '../db.php';
require '../login_check.php';

$ser_id = $_GET['id'];
$select_2 = "SELECT * FROM services WHERE id=$ser_id";
$select_res = mysqli_query($db_connect, $select_2);
$services = mysqli_fetch_assoc($select_res);
?>
<?php require '../dashboard_parts/header.php'; ?>
<div class="row">
    <div class="col-lg-6 m-auto">
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
                <form action="update_service.php" method="POST">
                    <?php foreach($fonts as $font) {?>
                        <i style="font-family: fontawesome; font-size: 24px;" class="fa <?=$font?>"></i>
                    <?php }?>
                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control" value="<?=$services['id']?>">
                        <label class="form-label">Font Awesome</label>
                        <input type="text" name="icon" class="form-control" id="icon" value="<?=$services['icon']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="<?=$services['title']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="desp"><?=$services['desp']?></textarea>
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
<script>
    $('.fa').click(function(){
        var icon = $(this).attr('class');
        $('#icon').attr('value', icon);
    });
</script>