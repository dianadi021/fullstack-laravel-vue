<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Person extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'persons';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_card',
        'first_name',
        'last_name',
        'fullname',
        'other_id_card',
        'mother_name',
        'mother_id_card',
        'pob',
        'dob',
        'religion',
        'ethnicity',
        'blood_type',
        'residential_address',
        'id_card_address',
        'person_details',
        'education',
        'employment',
        'marital_status',
        'gender',
        'estimated_age',
        'location_found',
        'date_found',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'id_card',
        'other_id_card',
        'mother_id_card',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'dob' => 'datetime',
            'date_found' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }
}
