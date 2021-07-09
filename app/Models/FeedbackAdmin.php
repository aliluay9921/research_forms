<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackAdmin extends Model
{
    use HasFactory;
    public $table = "feedbackadmins";
    protected $fillable = [
        'reliabilty', 'note', 'researcherforms_id', 'user_id'
    ];



    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }
    public function researcherforms()
    {
        return $this->hasMany(ResearcherForm::class, 'researcherforms_id');
    }
}