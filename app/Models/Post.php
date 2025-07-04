<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\BooleanColumn;

class Post extends Model
{
    protected $filable =['title','slug','exceprt','content','published','published_at','user_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
}
