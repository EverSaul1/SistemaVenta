<?php

use vista\Vista;

/**
 * Created by PhpStorm.
 * User: imarv
 * Date: 20/11/2015
 * Time: 1:17 AM
 */
class AdminController
{
    public function index()
    {
        return Vista::crear("admin.index");
    }
}
