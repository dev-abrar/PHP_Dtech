<?php 
require 'db.php';
require './login_check.php';
?>

<?php require 'dashboard_parts/header.php' ?>
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h3>Well Come To dashboard, <strong class="text-primary"><?=$after_assoc['name']?></strong></h3>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur suscipit vel mollitia corporis possimus.</p>
            </div>
        </div>
    </div>
</div>
<?php require 'dashboard_parts/footer.php' ?>
