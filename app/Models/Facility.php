<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $table='facilities';

    protected $primaryKey="id";
    
    protected $fillable =[
        'facility_type',
    ];
    public function categories(){
        return $this->hasMany(Category::class);
        
    }

    public function requirements(){
        return $this->hasMany(Requirement::class);
        
    }
 }
