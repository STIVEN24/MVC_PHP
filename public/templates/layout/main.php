<?php
namespace views\layout;
session_start();
$main = new Main();
class main
{
    public function __construct()
    {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URL;?>public/static/css/style.css">
    <title>Prueba_MVC1</title>
</head>
<body>

    <header>
        <?php if ($_SESSION) { ?>
        <nav>
            <ul>
                <li><a href="#"><i class="material-icons">person</i><?php echo $_SESSION['username'] ?></a></li>
                <li><a href="<?php echo URL;?>user/read"><i class="material-icons">group</i>Users</a></li>
            </ul>
            <ul>
                <?php if ($_SESSION) { ?>
                    <li><a href="<?php echo URL;?>auth/logout"><i class="material-icons">exit_to_app</i>Logout</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo URL;?>auth/login"><i class="material-icons">person</i>Login</a></li>
                        <?php } ?>
                    </ul>
                </nav>
        <?php } ?>
        <main>
            <div class="borders"></div>
            <div class="contenedor">
        <?php
        }
        public function __destruct()
        {
        ?>
            </div>
        </main>
    </header>

    <script src="<?php echo URL;?>public/static/js/script.js"></script>

</body>
</html>
<?php
    }
}
?>