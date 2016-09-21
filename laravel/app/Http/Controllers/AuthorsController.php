<?php
namespace App\Http\Controllers;

use View;
use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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
	public function new_author()
	{
		$view = View::make('authors.new')->with('title','Add New Author');
		return $view;
	}
	public function create_author()
	{
		$validation = Author::validate(Input::all());
		if($validation->fails())
		{
			return Redirect::route('author_new')->withErrors($validation)->withInput();
		}
		else
		{
			Author::create([
					'name' => Input::get('name'),
					'bio' => Input::get('bio')
			]);
			return Redirect::route('authors')->with('message','Author was added successfully!!');
		}
	}
	public function edit($id)
	{
		$view = View::make('authors.edit')->with('title','Edit Author')
		->with('author', Author::find($id));
		return $view;
	}
	public function update_author()
	{
		$id = Input::get('id');
		$validation = Author::validate(Input::all());
		if($validation->fails())
		{
			return Redirect::route('edit', $id)->withErrors($validation)->withInput();
		}
		else
		{
			$Author = Author::where('id', $id);
			$Author->update([
					'name' => Input::get('name'),
					'bio' => Input::get('bio')
			]);
			return Redirect::route('author', $id)->with('message','Author updated successfully!!');
		}
	}
}
