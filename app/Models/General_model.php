<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_model extends Model
{
    use HasFactory;
    function delete_global()
    {
        print_r($_POST);
        die();
    }

}
