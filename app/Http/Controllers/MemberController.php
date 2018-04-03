<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member; //memanggil model Member di folder App

class MemberController extends Controller
{
    public function getIndex(){
    	$data = Member::paginate(10); //untuk menggunakan pagination
    	//$data = Member::all(); //untuk memanggil seluruh data tanpa limit dan tanpa pagination
    	//$data = Member::take(10)->all(); //untuk memanggil seluruh data  limit 10 dan tanpa pagination
    	//$data = Member::get(); //untuk memanggil seluruh data tanpa limit dan tanpa pagination
    	return view("member",[
    		"members"=>$data
    	]);
    }
    public function getCreate(){
    	return view('member_create');
    }
    public function postCreate(Request $request){
    	$member = new Member;
    	$member->name 		= $request->name;
    	$member->address 	= $request->address;
    	$member->phone 		= $request->phone;
    	$member->save();

    	return redirect('member');
    }
    public function getEdit($id){
    	$row = Member::findOrFail($id);
    	return view('member_edit',[
    		"row"=>$row
    	]);
    }
    public function postEdit(Request $request,$id){
    	$member 			= Member::findOrFail($id);
    	$member->name 		= $request->name; 
    	$member->address 		= $request->address; 
    	$member->phone 		= $request->phone; 
    	$member->save();

    	return redirect('member');    	 
    }
    public function getDelete($id){
    	$member = Member::findOrFail($id);
    	$member->delete();
    	
    	return redirect('member'); 
    }
}
