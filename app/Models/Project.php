<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'category',
        'description',
        'image',
        'technologies',
        'demo_url',
        'source_url',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'technologies' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope untuk proyek terbaru
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Scope untuk kategori tertentu
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Get technologies as formatted string
     */
    public function getTechnologiesStringAttribute()
    {
        if (is_array($this->technologies)) {
            return implode(', ', $this->technologies);
        }
        
        return $this->technologies;
    }

    /**
     * Get short description (first 100 characters)
     */
    public function getShortDescriptionAttribute()
    {
        return substr($this->description, 0, 100) . '...';
    }

    /**
     * Check if project has demo URL
     */
    public function hasDemo()
    {
        return !empty($this->demo_url) && $this->demo_url !== '#';
    }

    /**
     * Check if project has source URL
     */
    public function hasSource()
    {
        return !empty($this->source_url) && $this->source_url !== '#';
    }
}