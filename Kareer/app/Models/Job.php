<?php

namespace App\Models;

use Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<JobFactory> */
    use HasFactory;

    public function tag(string $newTag): void
    {
        $tag =  Tag::firstOrCreate(['name' => $newTag]); // create a new tag if not exist, else just fetch

        $this->tags()->attach($tag);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, "job_tag");
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
