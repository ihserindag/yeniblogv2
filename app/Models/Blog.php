<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['title','description','category_id','slug'];
    use HasFactory;

    public function kategoriGetir()
    {
        return $this->hasOne('App\Models\Category','id','category_id');
    }

    public function uyeGetir()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
