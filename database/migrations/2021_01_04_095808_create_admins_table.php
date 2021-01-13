<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->longText("Category_Id")->nullable();
            $table->longText("Publisher_Id")->nullable();
            $table->longText("Report_Type")->nullable();
            $table->longText("Title")->nullable();
            $table->longText("Slug")->nullable();
            $table->longText("Total_Page")->nullable();
            $table->longText("Table_of_Content")->nullable();
            $table->longText("Description")->nullable();
            $table->longText("Segmentation")->nullable();
            $table->longText("key_player")->nullable();
            $table->longText("Summary")->nullable();
            $table->longText("Currency")->nullable();
            $table->longText("Single_User_Amount")->nullable();
            $table->longText("Multi_User_Amount")->nullable();
            $table->longText("Enterprise_Amount")->nullable();
            $table->longText("Data_Pack_Amount")->nullable();
            $table->longText("Meta_Title")->nullable();
            $table->longText("Meta_Description")->nullable();
            $table->longText("Meta_Canonical")->nullable();
            $table->longText("Date_Published")->nullable();
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
