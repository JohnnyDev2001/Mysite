<?php

namespace src\Controllers\Admin;

class AdminDashbord extends AdminController
{

    public function index()
    {
        
        print $this->template->renderizar('dashbord.html', [
            
        ]);
    }

}