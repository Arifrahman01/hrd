<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MigrationController extends Controller
{
    public function barrier(){
        return view('migration.barrier');
    }
}
