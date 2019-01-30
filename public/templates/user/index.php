<?php if ($_SESSION) { ?>
<h1>INDEX</h1>
<a href="<?php echo URL;?>user/create">Create</a>
<a href="<?php echo URL;?>user/read">Read</a>
<?php } else {  header('location:'.URL.'auth/login'); } ?>