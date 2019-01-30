<?php if ($_SESSION) { ?>
<form action="" method="POST" autocomplete="off">
	<input type="text" value="<?php echo $data['username']?>" placeholder="Username" name="username">
	<input type="hidden" value="<?php echo $data['id_user']?>" name="id">
	<button type="submit">Update User</button>
</form>

<a href="<?php echo URL;?>user/read"> <button>Cancel</button> </a>
<?php } else { header('location:'.URL.'auth/login'); } ?>