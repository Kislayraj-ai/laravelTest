<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bussinessModel extends Model
{
    protected $table ="bussiness" ;
    protected $primaryKey = "id" ;
    protected $fillable = ['Name' , "address" ,"email" ,"website","contact_person","phone_no"] ;

    use HasFactory;
}