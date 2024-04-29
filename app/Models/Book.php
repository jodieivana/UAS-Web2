<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function isBookshelved() {
        $alreadyBookshelved = Bookshelf::where('user_id', Auth::user()->id)
        ->where('book_id', $this->id)->first();
        if ($alreadyBookshelved) return true;
        else return false;
    }
}
