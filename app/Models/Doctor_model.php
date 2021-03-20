<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Doctor_model extends Model
{
    use HasFactory;
    protected $table="tbl_users";
    protected $fillable=['iUserID','vFirstName','vLastName','vMobile','vAlternateNo','vEmail','vAlternateEmail','vPassword','vProfileimg','eRole','eStatus','isDelete','created_at','updated_at'];

    function getAllDataByID($id)
    {
        $users = DB::table('tbl_users')
            ->Where('iUserID',$id)  
            ->get();
        return json_decode($users,true);
    }
}