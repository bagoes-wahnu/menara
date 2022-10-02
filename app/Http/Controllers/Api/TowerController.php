<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tower;

class TowerController extends Controller
{
    public function json(){
        $results = DB::table('tower_surabaya')
            ->select('gid','no_upt','nama_pemohon','kelurahan','kecamatan')
            ->get();
        return json_encode($results);
    }
}
