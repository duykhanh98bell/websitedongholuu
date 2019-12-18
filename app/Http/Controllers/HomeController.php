<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;
use App\indexing;
use App\tags;

class HomeController extends Controller
{
    //view
    public function trangchu()
    {
        $ShowHis = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',2)->paginate(3);
        $NewHis = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',2)->orderBy('detail.id', 'desc')->limit(1)->get();
        $ShowIf = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',3)->paginate(3);
        $NewIf = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',3)->orderBy('detail.id', 'desc')->limit(1)->get();
        $ShowKk = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',4)->paginate(3);
        $NewKk = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',4)->orderBy('detail.id', 'desc')->limit(1)->get();
        $ShowPg = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',5)->paginate(3);
        $NewPg = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',5)->orderBy('detail.id', 'desc')->limit(1)->get();
        $ShowCom = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',7)->paginate(3);
        $NewCom = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',7)->orderBy('detail.id', 'desc')->limit(1)->get();
        $ShowFb = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',8)->paginate(3);
        $NewFb = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',8)->orderBy('detail.id', 'desc')->limit(1)->get();
        $ShowLb = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->where('tags.id',6)->get();
        $NewL = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->orderBy('detail.id', 'desc')->limit(1)->get();
        $NewR = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->orderBy('detail.id', 'desc')->limit(6)->get();
        $NewA = indexing::join('tags','tags.id','=','indexing.id_tags')->join('detail','detail.id_index','=','indexing.id')->orderBy('detail.id', 'desc')->get();

    	return view('layouts.trangchu',[
            'ShowHis'=>$ShowHis,
            'ShowIf'=>$ShowIf,
            'ShowKk'=>$ShowKk,
            'ShowPg'=>$ShowPg,
            'ShowCom'=>$ShowCom,
            'ShowFb'=>$ShowFb,
            'ShowLb'=>$ShowLb,
            'NewHis'=>$NewHis,
            'NewIf'=>$NewIf,
            'NewKk'=>$NewKk,
            'NewPg'=>$NewPg,
            'NewCom'=>$NewCom,
            'NewFb'=>$NewFb,
            'NewL'=>$NewL,
            'NewR'=>$NewR,
            'NewA'=>$NewA

        ]);
    }
    public function chitiet()
    {
    	return view('layouts.chitiet');
    }
    public function quyche()
    {
    	return view('layouts.quyche');
    }
    public function xaydungdongtoc()
    {
    	return view('layouts.xaydungdongtoc');
    }

}
