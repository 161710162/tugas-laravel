<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
class SiswaController extends Controller
{
    
    public function index()
    {
    	$a='<i><h2>ini halaman aboute</h2></i>';
    	$b='<b>15 jenuary 2018';
    	return view ('escape',compact('a','b'));
    }
     public function tabel()
{
    $bca = siswa::all();
        return view ('coba',compact('bca'));
}

    public function paragraf()
    {
    	return view ('paragraf');
    }
    public function gamepc()
    {
    	return view ('game');
    }
    public function hargahp()
    {
    	return view ('hp');
    }
}
