<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;
use App\indexing;
use App\tags;


class LichsudonghoController extends Controller
{
    public function lichsudongho()
    {
    	$BigHis = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',2)->orderBy('detail.id', 'desc')->limit(1)->get();
    	$HisList = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',2)->orderBy('detail.id', 'desc')->paginate(2);
    	return view('layouts.lichsudongho',[
    		'HisList'=>$HisList,
    		'BigHis'=>$BigHis

    	]);
    }
    
}
