<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tracking;
use Illuminate\Http\Request;

class trackingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *โชว์บล๊อคทุกบล๊อค
	 * @return Response
	 */
	public function index()
	{
		$objs = tracking::all();
		$data['objs'] =$objs;
		return view('Test.doing',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *โหลดฟอร์มมาโชว์
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *insert ค่าต่างๆลงดีบี
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
	 *เข้าไปใน id ของโค๊ดนั้นๆ
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$obj = tracking::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$obj = tracking::find($id);
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
		$obj 			= tracking::find($trackingId);
		$obj->topic 	= $request('Topic');
		$obj->sender 	= $request('member_Person_personId_sender');
		$obj->trackStatus_trackStatusId =1;
		$obj->save();
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
