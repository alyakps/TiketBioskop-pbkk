<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Member extends BaseController
{
    public function index()
    {
        echo view('comp/header_member');
        echo view('member_vw');
        echo view('comp/footer');
    }
}
