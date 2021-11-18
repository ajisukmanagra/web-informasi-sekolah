<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $table = 'eskul';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}
