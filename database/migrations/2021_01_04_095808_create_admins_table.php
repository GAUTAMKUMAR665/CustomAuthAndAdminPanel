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
            $table->longText("Category_Id");
            $table->longText("Publisher_Id");
            $table->longText("Report_Type");
            $table->longText("Title");
            $table->longText("Slug");
            $table->longText("Total_Page");
            $table->longText("Table_of_Content");
            $table->longText("Description");
            $table->longText("Segmentation");
            $table->longText("key_player");
            $table->longText("Summary");
            $table->longText("Currency");
            $table->longText("Single_User_Amount");
            $table->longText("Multi_User_Amount");
            $table->longText("Enterprise_Amount");
            $table->longText("Data_Pack_Amount");
            $table->longText("Meta_Title");
            $table->longText("Meta_Description");
            $table->longText("Meta_Canonical");
            $table->longText("Date_Published");
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
