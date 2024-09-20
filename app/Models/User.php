<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// Importa el contrato y el trait de Auth0
use Auth0\Laravel\Contract\Auth0UserContract;
use Auth0\Laravel\Traits\Auth0UserTrait;

class User extends Authenticatable implements Auth0UserContract
{
    use HasFactory, Notifiable, Auth0UserTrait;

    /**
     * Los atributos que son asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'apellidos',
        'email',
        'password',
    ];

    /**
     * Los atributos que deben ocultarse para arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Los atributos que deben ser casteados.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Obtiene el identificador único del usuario en Auth0.
     *
     * @return string|null
     */
    public function getAuthIdentifier()
    {
        return $this->sub;
    }

    /**
     * Obtiene el nombre del usuario desde Auth0.
     *
     * @return string|null
     */
    public function getAuthName()
    {
        return $this->name;
    }

    /**
     * Obtiene el email del usuario desde Auth0.
     *
     * @return string|null
     */
    public function getAuthEmail()
    {
        return $this->email;
    }
}
