<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Model\Roles;


class RolesTableSeeder extends Seeder{

    public function run()
    {
        DB::table('roles')->delete();
        $roles = ['Admin','User','Trial','Paid'];
        foreach ($roles as $rol)
        {
          Roles::create(['name' => $rol]);
        }
    }
}