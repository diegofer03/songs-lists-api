<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Songs;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function PDF(){

        $songs = Songs::all();

        $pdf = PDF::loadView('songslist.index',compact('songs'));
        return $pdf->download('songsList.pdf');
    }
}
