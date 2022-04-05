<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;   

    /**
     * Get the company that the employee belongs to.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
