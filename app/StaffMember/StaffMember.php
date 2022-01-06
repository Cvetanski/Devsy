<?php

namespace App\StaffMember;

use App\CoffeeBreakPreference\CoffeeBreakPreference;
use Illuminate\Database\Eloquent\Model;

class StaffMember extends Model
{
    protected $table = 'staff_members';

    protected $fillable =[
        'name',
        'email',
    ];

    public function getId():int
    {
        return (int)$this->getAttribute('id');
    }

    public function getName():string
    {
        return $this->getAttribute('name');
    }

    public function setName(string $name)
    {
        $this->setAttribute('name',$name);
    }

    public function getEmail():string
    {
        return $this->getAttribute('email');
    }

    public function setEmail(string $email)
    {
        $this->setAttribute('email',$email);
    }

    public function breakPreferences()
    {
        return $this->hasMany(CoffeeBreakPreference::class);
    }
}
