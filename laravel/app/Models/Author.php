<?php
namespace App\Models;
use Eloquent;

class Author extends Eloquent
{
  protected $fillable = ['name', 'bio'];
  public $table = 'authors';
}
