<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->roles->map->permissions->flatten()->pluck('slug');
    }

    public function hasRole(string $role): bool
    {
        return $this->roles()->where('slug', $role)->exists();
    }

    public function hasRoles(array $slugs): bool
    {
        return $this->roles()->whereIn('slug', $slugs)->exists();
    }

    public function hasPermission(string $permission): bool
    {
        return $this->permissions()->contains($permission);
    }

    public function details(): HasOne
    {
        return $this->hasOne(Details::class, 'user_id', 'id');
    }

    public function years(): HasMany
    {
        return $this->hasMany(Year::class, 'author_id');
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class, 'author_id');
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class, 'author_id');
    }

    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class, 'author_id');
    }

    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class, 'author_id');
    }
}
