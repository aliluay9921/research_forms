<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearcherFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researcherforms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('search_title');
            $table->integer('search_type');
            $table->integer('volume');
            $table->integer('type_volume'); // الاصدار مال بحث 
            $table->integer('version');
            $table->string('upload_search');
            $table->string('link_search');
            $table->string('journal_title');
            $table->string('publication');
            $table->string('front_journal');
            $table->string('journal_type');
            $table->integer('approvment');
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
        Schema::dropIfExists('researcherforms');
    }
}