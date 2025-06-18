<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'is_active',
    ];

    // Accessor: full_name
    public function getFullNameAttribute(): string
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    // Mutator: email in lowercase
    public function setEmailAttribute($value): void
    {
        $this->attributes['email'] = strtolower($value);
    }

    // Local Scope: Active users
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }
}
