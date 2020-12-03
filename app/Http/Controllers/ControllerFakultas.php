<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 

use App\mahasiswa\fakultas;
 
 
class ControllerFakultas extends Controller
{
    public function index()
    {
    	
    	$fakultas = Fakultas::all();
 
    	return view('fakultas', ['fakultas' => $fakultas]);
    }
 
}