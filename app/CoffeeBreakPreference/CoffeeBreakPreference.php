<?php

namespace App\CoffeeBreakPreference;

use App\StaffMember\StaffMember;
use Illuminate\Database\Eloquent\Model;

class CoffeeBreakPreference extends Model
{
    protected $table = 'coffee_break_preferences';

    protected $fillable=[
        'preferences',
        'staff_member_id',
    ];

    protected $casts = ['preferences'=>'array'];

    public function getId():int
    {
        return (int)$this->getAttribute('id');
    }

    public function getPreference()
    {
        return $this->getAttribute('preferences');
    }

    public function staffMembers()
    {
        return $this->belongsTo(StaffMember::class,'staff_member_id','id');
    }

}
