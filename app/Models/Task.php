<?php

namespace App\Models;

use App\Traits\Searchable;
use Database\Factories\TaskFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, Searchable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'created_by',
        'title',
        'description',
        'completed',
    ];

    /**
     * The attributes that searches the model.
     *
     * @return array
     */
    protected function getSearchableFields(): array
    {
        return array_merge($this->fillable, []);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'completed' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    protected static function newFactory(): TaskFactory|Factory
    {
        return TaskFactory::new();
    }
}
