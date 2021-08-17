<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $table='categories';

    protected $primaryKey="id";

    protected $fillable =[
        'company_name',
    ];
    
    // A private_hospital Belongs to a Facility
    public function facility(){
        return $this->belongsTo(Facility::class);
    }

    // A category has many requirement
    public function requirements(){
        return $this->hasMany(Requirement::class);
        
    }
}
