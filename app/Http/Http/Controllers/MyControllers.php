<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MyControllers extends Controller {

	public function done() {
		return view('Test.done');
	}

	public function doing(){
		return view('Test.doing');
	}

	public function all(){
		return view('Test.all');
	}

	public function todo(){
		return view('Test.to-do');
	}

	public function done2(){
		return view('Test.task-done');
	}

	public function doing2(){
		return view('Test.task-doing');
	}

	public function index(){
		return view('Test.index');
	}

	public function tracking(){
		return view('Test.tracking');
	}

	public function create(){
		return view('Test.create');
	}

	public function meeting(){
		return view('Test.meeting');
	}

	public function task(){
		return view('Test.task');
	}

	public function stat(){
		return view('Test.statistic');
	}

	public function user(){
		return view('Test.user-name');
	}
}
