<?php


class StaffMembersSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        $staffMember = new \App\StaffMember\StaffMember();
        $staffMember->setName('John Doe');
        $staffMember->setEmail('jondoe@gmail.com');

        $staffMember->save();

        $staffMember = new \App\StaffMember\StaffMember();
        $staffMember->setName('Maceo Plex');
        $staffMember->setEmail('maceoplex@gmail.com');

        $staffMember->save();
    }
}
