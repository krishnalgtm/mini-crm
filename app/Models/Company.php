<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // mass assignment allow fields
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
    ];

    // Relationship: One Company has many Employees
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
