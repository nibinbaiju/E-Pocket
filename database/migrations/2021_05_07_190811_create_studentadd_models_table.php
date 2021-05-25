<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\StudentaddModel;

class CreateStudentaddModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentadd_models', function (Blueprint $table) {
            $table->id();
            $table->String("fname");
            $table->String("gname");
            $table->String("bday");
            $table->String("course");
            $table->String("gender");
            $table->String("pno");
            $table->String("cadd");
            $table->String("lemail");
            $table->String("lpass");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentadd_models');
    }
}
