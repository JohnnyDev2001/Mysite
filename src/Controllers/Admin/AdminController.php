<?php

namespace src\Controllers\Admin;
use src\Core\Controller;


class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct("Views/admin/view");
    }
}