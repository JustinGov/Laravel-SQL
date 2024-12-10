<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'form';
    protected $primaryKey = 'idForm';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $fillable = ['idForm', 'Nama', 'Email'];

    // Disable Laravel's timestamps
    public $timestamps = false;
}
