<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
          [
              'name' => 'admin',
              'guard_name' => 'web',
              'created_at' => now(),
              'updated_at' => now()
          ],[
              'name' => 'user',
              'guard_name' => 'web',
              'created_at' => now(),
              'updated_at' => now()
          ],


        ];
        \Spatie\Permission\Models\Role::insert($role);
    }
}
