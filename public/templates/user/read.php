<?php if ($_SESSION) { ?>
<div style="overflow-x:auto;">
    <table>
        <thead>
            <th>id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Date</th>
            <th>Update</th>
            <th>Delete</th>
            <th>id_rol</th>
            <th>rol</th>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($data)) {?>
                    <tr>
                        <td><?php echo $row['id_user'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><a href="<?php echo URL;?>user/update/<?php echo $row['id_user']; ?>" title="Update"><i class="material-icons">update</i></a></td>
                        <td><a href="<?php echo URL;?>user/delete/<?php echo $row['id_user']; ?>" title="Delete"><i class="material-icons">delete</i></a></td>
                        <td><?php echo $row['id_rol'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<a href="<?php echo URL;?>user/create"> <button>Create User</button> </a>
<?php } else { header('location:'.URL.'auth/login'); } ?>