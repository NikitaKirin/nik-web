<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\AsSource;

class Project extends Model
{
    use Attachable, AsSource;

    protected $fillable = [
        'title',
        'annotation',
        'description',
        'technologies',
        'demo_link',
        'code_link',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function fon(): HasOne
    {
        return $this->hasOne(Attachment::class, 'id', 'fon_id')->withDefault();
    }
}