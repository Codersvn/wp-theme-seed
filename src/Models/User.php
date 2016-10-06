<?php

namespace App\Models;

use NFWP\Models\NFModel;

class User extends NFModel
{
    protected $table = NFWP_DB_TABLE_PREFIX . 'users';
}
