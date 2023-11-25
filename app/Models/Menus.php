<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    protected $table ='menus';
    protected $fillable = ['name','user_id'];
    public $timestamps = false;
    public function records(){
        return $this->hasMany(records::class);
    }
}
