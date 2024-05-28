<?php

namespace App\Models;

use CodeIgniter\Model;

class MyModel extends Model
{
    protected $table = 'friends';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'theysay'];
}
