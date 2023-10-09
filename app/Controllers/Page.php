<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        echo "ini halaman page, nama saya $this->namaku";
    }
    public function naon()
    {
        echo "naon atuh";
    }
}
