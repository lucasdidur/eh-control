<?php

namespace EhControl;

use Illuminate\Database\Eloquent\Model;

class PermissionServerModel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permission_servers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['order', 'name', 'type'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['host', 'database', 'user', 'password'];
}
