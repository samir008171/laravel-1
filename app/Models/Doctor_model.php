<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_model extends Model
{
    use HasFactory;

    protected $table="tbl_users";
    protected $fillable=['iUserID','vFirstName','vLastName','vMobile','vAlternateNo','vEmail','vAlternateEmail','vPassword','vProfileimg','eRole','eStatus','isDelete','created_at','updated_at'];
}
