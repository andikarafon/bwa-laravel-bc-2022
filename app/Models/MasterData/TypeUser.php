<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    //use HasFactory;

   use SoftDeletes;

   public $table = 'type_user'; //declrae tabel

   //this field must type date yyyy-mm-dd hh:mm:ss
   protected $dates = [ 
       'created_at', 
       'updated_at',
       'deleted_at',
   ];

   //declare fillable artinya yang diperbolehkan untuk diisi
   protected $fillable = [
       'name',
       'created_at',
       'updated_at',
       'deleted_at',
   ];
}
