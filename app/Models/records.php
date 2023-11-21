<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class records extends Model
{
    use HasFactory;
    protected $table ='records';
    protected $fillable =[
        'user_id',
        'weight',
        'times',
        'menu_id',
        'training_date',
        ];
   public function Menu(){
        return $this->belongsTo(Menus::class);
       
   }
        
}