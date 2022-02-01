<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    public function category(){
      return $this->belongsTo(Category::class);
    }

    public function getData(){
      $colors = Color::paginate(8);
      return view('welcome', compact('employees'));
}

}
