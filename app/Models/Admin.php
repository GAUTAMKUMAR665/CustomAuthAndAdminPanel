<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable=["Category_Id", "Publisher_Id", "Report_Type", "Title", "Slug", "Total_Page", "Table_of_Content", "Description", "Segmentation", "key_player", "Summary", "Currency", "Single_User_Amount", "Multi_User_Amount", "Enterprise_Amount", "Data_Pack_Amount", "Meta_Title", "Meta_Description", "Meta_Canonical", "Date_Published"];
}
