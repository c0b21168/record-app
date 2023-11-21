<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaxRecords extends Model
{
    use HasFactory;
    protected $table = 'max_records';
    protected $fillable =[
        'user_id',
        'menu_id',
        'training_date',
        'max_weight'
        ];
    public function Menus(){
        return $this->hasMany('App/Models/Menus');
    }
}

