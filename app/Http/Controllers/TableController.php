<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function showTable()
    {
        return view('table'); 
    }

    public function showDataTables()
    {
        return view('data-table');
    }

}
