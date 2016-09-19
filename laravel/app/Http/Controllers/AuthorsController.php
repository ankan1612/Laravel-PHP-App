<?php
namespace App\Http\Controllers;

use View;
use App\Http\Controllers\Controller;
use App\Models\Author;

class AuthorsController extends Controller
{
	public $restful = true;
	public  function index()
	{
		$view = View::make('authors.index')->with('title','Authors and Books')
		->with('authors', Author::orderby('name')->get());
		return $view;
	}
	public function show($id)
	{
		$view = View::make('authors.view')->with('title','Author Details')
		->with('author', Author::find($id));
		return $view;
	}
}
