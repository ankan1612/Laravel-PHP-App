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
            'name'=>'Ankan',
            'bio'=>'PHP tutorials',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            ));
        DB::table('authors')->insert(array(
            'name'=>'Allan',
            'bio'=>'Bio tutorials',
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
