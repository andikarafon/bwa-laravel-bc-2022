<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    //use HasFactory;

   use SoftDeletes;

   public $table = 'appointment'; //declrae tabel

   //this field must type date yyyy-mm-dd hh:mm:ss
   protected $dates = [ 
       'created_at', 
       'updated_at',
       'deleted_at',
   ];

   //declare fillable artinya yang diperbolehkan untuk diisi
   protected $fillable = [
       'doctor_id',
       'user_id',
       'consultation_id',
       'level',
       'date',
       'time',
       'status',
       'created_at',
       'updated_at',
       'deleted_at',
   ];
}
