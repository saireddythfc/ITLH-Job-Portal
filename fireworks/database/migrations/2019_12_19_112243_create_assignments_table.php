<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->longText('title');
            $table->longText('description');
            $table->longText('specification_doc_url');
            $table->longText('company_name');
            $table->longText('tags');
            $table->longText('status');

            $table->bigInteger('tat');
            $table->bigInteger('cost_low');
            $table->bigInteger('cost_high');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments');
    }
}
