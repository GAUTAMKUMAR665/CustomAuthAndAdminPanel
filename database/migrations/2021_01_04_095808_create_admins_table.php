<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string("Category_Id");
            $table->string("Publisher_Id");
            $table->string("Report_Type");
            $table->string("Title");
            $table->string("Slug");
            $table->string("Total_Page");
            $table->string("Table_of_Content");
            $table->string("Description");
            $table->string("Segmentation");
            $table->string("Market_key_Player");
            $table->string("List_of_table");
            $table->string("Currency");
            $table->string("Single_User_Amount");
            $table->string("Multi_User_Amount");
            $table->string("Enterprise_Amount");
            $table->string("Data_Pack_Amount");
            $table->string("Meta_Title");
            $table->string("Meta_Description");
            $table->string("Meta_Canonical");
            $table->string("Date_Published");
            $table->string('status');
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
        Schema::dropIfExists('admins');
    }
}
