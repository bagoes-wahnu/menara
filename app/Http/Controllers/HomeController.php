<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\TowerApiController;
use App\Models\Tower;

class HomeController extends Controller
{
    public function index()
    {
        return view('home1');
    }

    public function show($gid)
    {
        // $data['aspects'] = Tower::find($gid);
        $aspects = Tower::findOrFail($gid);
        // dd($aspects);
        return view('home2', compact('aspects'));
    }
}
