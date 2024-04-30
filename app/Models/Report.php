<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reported_user() {
        return $this->belongsTo(User::class, 'reported_user_id');
    }

    public function reporter_user() {
        return $this->belongsTo(User::class, 'reporter_user_id');
    }

    public function review() {
        return $this->belongsTo(Review::class, 'reported_review_id')->withTrashed();
    }
}
