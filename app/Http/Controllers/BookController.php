<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book; //memanggil model book di folder App

class BookController extends Controller
{
    public function getIndex(){
    	$data = book::paginate(10); //untuk menggunakan pagination
    	return view("book",[
    		"books"=>$data
    	]);
    }
    public function getCreate(){
    	return view('book_create');
    }
    public function postCreate(Request $request){
    	$book = new book;
    	$book->book_name 		= $request->book_name;
    	$book->book_code 	= $request->book_code;
    	$book->authors_id 		= $request->authors_id;
    	$book->save();

    	return redirect('book');
    }
    public function getEdit($id){
    	$row = book::findOrFail($id);
    	return view('book_edit',[
    		"row"=>$row
    	]);
    }
    public function postEdit(Request $request,$id){
    	$book 			= book::findOrFail($id);
    	$book->book_name 		= $request->book_name; 
    	$book->book_code 		= $request->book_code; 
    	$book->authors_id 		= $request->authors_id; 
    	$book->save();

    	return redirect('book');    	 
    }
    public function getDelete($id){
    	$book = book::findOrFail($id);
    	$book->delete();
    	
    	return redirect('book'); 
    }
}
