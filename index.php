<?php
    spl_autoload_register(function ($class_name) {
        if(file_exists('./Router/'.$class_name.'.php'))
            require_once './Router/'.$class_name.'.php';
        elseif (file_exists('./Controllers/'.$class_name.'.php'))
            require_once './Controllers/'.$class_name.'.php';
        /*elseif (file_exists('./DataBase/'.$class_name.'.php'))
            require_once './DataBase/'.$class_name.'.php';*/

    });
    require_once('Routes.php');
    require_once ('DataBase/Db.php');
    $rout = new Routes();
    $rout->start();
?>
