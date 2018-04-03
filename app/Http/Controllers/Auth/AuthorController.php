<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author; //memanggil model author di folder App

class authorController extends Controller
{
    public function getIndex(){
    	$data = author::paginate(10); 
    	return view("author",[
    		"authors"=>$data
    	]);
    }
    public function getCreate(){
    	return view('author_create');
    }
    public function postCreate(Request $request){
    	$author = new author;
    	$author->name 		= $request->name;
    	$author->address 	= $request->address;
    	$author->phone 		= $request->phone;
    	$author->save();

    	return redirect('author');
    }
    public function getEdit($id){
    	$row = author::findOrFail($id);
    	return view('author_edit',[
    		"row"=>$row
    	]);
    }
    public function postEdit(Request $request,$id){
    	$author 			= author::findOrFail($id);
    	$author->name 		= $request->name; 
    	$author->address 		= $request->address; 
    	$author->phone 		= $request->phone; 
    	$author->save();

    	return redirect('author');    	 
    }
    public function getDelete($id){
    	$author = author::findOrFail($id);
    	$author->delete();
    	
    	return redirect('author'); 
    }
}
