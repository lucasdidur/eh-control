<?php

namespace EhControl;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'id_bungeecord',
        'id_multicraft',
        'database_host',
        'database_name',
        'database_user',
        'database_password'
    ];
}
