<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('authors')->insert(array(
            'name'=>'Author1',
            'bio'=>'PHP tutorials',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            ));
        DB::table('authors')->insert(array(
            'name'=>'Author2',
            'bio'=>'Bio tutorials',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            ));
        DB::table('authors')->insert(array(
            'name'=>'Author3',
            'bio'=>'Java tutorials',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            ));
        DB::table('authors')->insert(array(
            'name'=>'Author4',
            'bio'=>'Chem tutorials',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            ));
        DB::table('authors')->insert(array(
            'name'=>'Author5',
            'bio'=>'C# tutorials',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            ));
        DB::table('authors')->insert(array(
            'name'=>'Author6',
            'bio'=>'C++ tutorials',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('authors')->where('name','=','Ankan')->delete();
        DB::table('authors')->where('name','=','Allan')->delete();
    }
}
