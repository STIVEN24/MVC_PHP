<?php if ($_SESSION) { ?>
<form action="" method="POST" autocomplete="off">
	<input type="text" placeholder="Username" name="username">
	<input type="password" placeholder="Password" name="password">

	<select name="id_rol">
		<option>- Rol -</option>
		<?php while($row = mysqli_fetch_array($data)) { ?>
		<option value="<?php echo $row['id_rol']; ?>"><?php echo $row['name']; ?></option>
		<?php } ?>
	</select>
	
	<button type="submit">Create User</button>
</form>
<a href="<?php echo URL;?>user/read"> <button>Read Users</button> </a>
<?php } else { header('location:'.URL.'auth/login'); } ?>