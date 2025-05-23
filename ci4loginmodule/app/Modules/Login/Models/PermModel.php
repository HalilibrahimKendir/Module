<?php

namespace App\Modules\Login\Models;

use CodeIgniter\Model;

class PermModel extends Model
{
    protected $table = 'perms';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description'];
} 