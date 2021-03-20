<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class General_model extends Model
{
    use HasFactory;
    function Delete()
    {
        extract($_POST);
        $affected = DB::table($tbl)
        ->where($column,$id)
        ->update(['isDelete' => 'Yes']);
        if($affected==1)
        return 1;
        else
        return 0;
    }


    function ChangeStatus()
    {
        extract($_POST);
        $affected = DB::table($tbl)
        ->where($id_col,$id)
        ->update([$change_col => $val]);
        if($affected==1)
        return 1;
        else
        return 0;
    }
}