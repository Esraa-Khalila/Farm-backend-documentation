<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;
    protected $fillable = ['name','location	','price','space','images','description','active','time','day','roomNumber'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
