<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directories_pl;
;

class DirectoriesController extends Controller
{
    public function welcome()
    {
        $directory = Directories_pl::where('dirid',4)->first();
        // $directory = $directory[0];
        return view('Directory.show', compact(['directory']));
    }
}
