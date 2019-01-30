<?php if ($_SESSION) { header('location:'.URL.'user/read'); 
} else { ?>
<div class="background-login">
    <div class="login">
        <form action="" id="login" method="POST" autocomplete="off">
            <input type="text" placeholder="Username" name="username" id="username">
            <input type="password" placeholder="Password" name="password" id="password">
            <button type="submit">Login</button>
        </form>
    </div>
</div>
<?php } ?>