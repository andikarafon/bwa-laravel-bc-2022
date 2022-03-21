<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    //use HasFactory;

    use SoftDeletes;

    public $table = 'role'; //declrae tabel

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [ 
        'created_at', 
        'updated_at',
        'deleted_at',
    ];

    //declare fillable artinya yang diperbolehkan untuk diisi
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function permission_role()
    {
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
    }

    public function role()
    {
        return $this->hasMany('App\Models\ManagementAccess\Role', 'role_id');
    }


}
