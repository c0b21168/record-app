<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory
    protected $table ='max_records';
    protected $fillable =[
        'max_weight',
        'menu_id',
        'training_date',
        ];
   public function Menus(){
        return $this->hasMany('App/Models/Menus');
    }
}
