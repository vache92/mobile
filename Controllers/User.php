<?php
class User extends Controller {

    public function index()
    {
        echo "<pre>";
        print_r(self::select ("Select * From users"));
        die;
    }
}

?>
