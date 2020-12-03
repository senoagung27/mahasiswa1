<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 

use App\mahasiswa\mahasiswa;
 
 
class ControllerMahasiswa extends Controller
{
   return return response()->json([
       'status' => true,
       'message' => 'sukses add mahasiswa',
       'result' => $mahasiswa,
   ]);
 
}