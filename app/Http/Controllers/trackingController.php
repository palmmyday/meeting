<?php 
namespace App\Http\Controllers; //กำหนดที่อยู่ ของ Controller ที่เรียกใช้งาน
use Input;
use Redirect;
use File;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tracking;// กำหนดชื่อ ของ Model จากที่อยู่ของ Model ที่เราเรียกใช้งาน

class trackingController extends Controller {
 public function show($trackingId){
    $obj['trackingId'] = $trackingId;
    $id = DB::table('tracking')->where('trackingId',$trackingId)->value('id');
    $obj['checkId'] = $id;
    $obj['trackingstatus'] = DB::table('tracking')->where('id',$id)->value('trackingstatus');
    
    $obj['detail'] = DB::table('tracking')
                    ->where('trackingId',$id)->get();
   
    $tracking = tracking::get();
    return $tracking ? 'Model tracking Connect Yes!' : 'Error! Model tracking Connect False!!!';
 }
}