<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tracking;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\trackstatus;

class DoingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$obj 	=new Tracking();
		$obj->trackingTopic 	= 'ABC';
		$obj->trackingDeadline 	='2017-04-26 00:00:00';
		$obj->TrackingDateAccept='2017-04-19 00:00:00';
		$obj->TrackingDescription='ABuvbjernvgioewriv';
		$obj->save();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$obj 			= new tracking();
		$obj->trackingId = $request('trackingId');
		$obj->topic 	= $request('trackingTopic');
		$obj->sender 	=$request('member_Person_personId_sender');
		$obj->trackStatus_trackStatusId=1;
		$obj->save();
		return redirect(url('/all'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		//$obj['trackingId']=$trackingId;
		
		//$id= DB::table('tracking')->value('trackStatus_trackStatusId');
		//$jan=tracking::all();
		$jan=DB::table('tracking')
			->join('trackstatus', 'tracking.trackStatus_trackStatusId', '=', 'trackstatus.trackStatusId')
			->join('member','tracking.member_Person_personId_sender','=','member.Person_personId')
			->join('person','member.Person_personId','=','person.personId')
			->where('trackstatus.trackStatusName','=','TO DO')->get();
		//$r= trackstatus::lists('trackStatusName','trackstatusId');
		//dd($jan);
		return view('Test.to-do', ["jan" => $jan]);
	}

	public function show2()
	{
		$dum =DB::table('tracking')
		->join('trackstatus', 'tracking.trackStatus_trackStatusId', '=', 'trackstatus.trackStatusId')
		->join('member','tracking.member_Person_personId_sender','=','member.Person_personId')
		->join('person','member.Person_personId','=','person.personId')
		->where('trackstatus.trackStatusName','=','Done')->get();

		$dam =DB::table('tracking')
		->join('trackstatus', 'tracking.trackStatus_trackStatusId', '=', 'trackstatus.trackStatusId')
		->join('member','tracking.member_Person_personId_receive','=','member.Person_personId')
		->join('person','member.Person_personId','=','person.personId')
		->where('trackstatus.trackStatusName','=','Done')->get();
		return view('Test.done', ["dum" => $dum],["dam" => $dam]);
	}

	public function show3(){
		$tod=DB::table('tracking')
			->join('trackstatus', 'tracking.trackStatus_trackStatusId', '=', 'trackStatus.trackStatusId')
			->join('member','tracking.member_Person_personId_receive','=','member.Person_personId')
			->join('person','member.Person_personId','=','person.personId')
			->where('trackstatus.trackStatusName','=', 'Doing')->get();
			return view('Test.doing', ["tod" => $tod]);
	}

	public function show4(){
		$alla=DB::table('tracking')
			->join('trackstatus','tracking.trackStatus_trackStatusId','=','trackStatus.trackStatusId')
			->join('member','tracking.member_Person_personId_receive','=','member.Person_personId')
			->join('person','member.Person_personId','=','person.personId')->get();
			return view('Test.all', ["alla" =>$alla]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 public function getProfile(){
		$id = Auth::tracking()->id;
        $trackingStatus = tracking::where('trackingId',$id)->first();
        if(!$trackingStatus) return redirect('admin/user/index');
        $data = array('id' => $id,'trackingStatus' => $trackingStatus);
        return view('admin.user.form',$data);

	 }
	public function edit($trackingId)
	{
		$obj = tracking::find($trackingId);
		$obj-> topic = 'Hello world';
		$obj->save();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$trackingId)
	{
		
    
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($trackingId)
	{
		$obj = tracking::find($trackingId);
		$obj->delete();
	}

}
