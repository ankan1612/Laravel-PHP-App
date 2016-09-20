<?php
namespace App\Models;
use Eloquent;
use Validator;

class Author extends Eloquent
{
  protected $fillable = ['name', 'bio'];
  public $table = 'authors';
  public static $rules = ['name'=>'required|min:2', 'bio'=>'required|min:10'];
  public static function validate($value)
  {
    return Validator::make($value, static::$rules);
  }
}
