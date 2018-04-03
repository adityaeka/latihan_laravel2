<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author; //memanggil model author di folder App

class authorController extends Controller
{
    public function getIndex(){
    	$data = author::paginate(10); //untuk menggunakan pagination
    	return view("author",[
    		"authors"=>$data
    	]);
    }
    public function getCreate(){
    	return view('author_create');
    }
    public function postCreate(Request $request){
    	$author = new author;
    	$author->author_name 	= $request->author_name;
    	$author->author_code 	= $request->author_code;
    	$author->author_region	= $request->author_region;
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
    	$author->author_name 		= $request->author_name; 
    	$author->author_code 		= $request->author_code; 
        $author->author_region     = $request->author_region;
    	$author->save();

    	return redirect('author');    	 
    }
    public function getDelete($id){
    	$author = author::findOrFail($id);
    	$author->delete();
    	
    	return redirect('author'); 
    }
}
