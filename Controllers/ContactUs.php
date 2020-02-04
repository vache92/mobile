<?php

 class ContactUs extends Controller {

  public function index()
    {
     print_r(self::select ("Select * From users"));
    }
 }

?>
