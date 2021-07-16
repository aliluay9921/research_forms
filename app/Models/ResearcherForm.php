<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearcherForm extends Model
{
    use HasFactory;
    public $table = "researcherforms";
    protected $fillable = [
        'user_id', 'search_title', 'search_type',
        'volume', 'type_volume', 'version',
        'upload_search', 'link_search', 'journal_title',
        'publication', 'front_journal', 'journal_type', 'approvment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function searchForms()
    {
        return $this->hasMany(FeedbackAdmin::class, 'researcherforms_id');
    }
}
