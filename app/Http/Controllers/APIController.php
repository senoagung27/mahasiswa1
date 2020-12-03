<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getDataByMahasiswa()
{
    $users = User::with(['mahasiswa'])->orderBy('created_at', 'DESC')->get();
    return response()->json(['data' => $users]);
}
public function getDataByProdi()
{
    $users = User::with(['prodi'])->orderBy('created_at', 'DESC')->get();
    return response()->json(['data' => $users]);
}
}
