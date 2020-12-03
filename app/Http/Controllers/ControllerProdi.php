<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 

use App\mahasiswa\prodi;
 
 
class ControllerProdi extends Controller
{
    public function index()
    {
    	
    	$prodi = Prodi::all();
 
    	return view('prodi', ['prodi' => $prodi]);
    }
 
}