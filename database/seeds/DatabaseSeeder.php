<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Building::class, 1)->create();

        factory(\App\Role::class, 1)->create(['name' => 'Admin']);
        factory(\App\Role::class, 1)->create(['name' => 'Staff']);
        factory(\App\Role::class, 1)->create(['name' => 'Resident']);

        factory(\App\User::class, 20)->create()
            ->each(function (\App\User $u) {
                if ($u->role_id == 2) {
                    factory(\App\Resident::class, 1)->create(["user_id" => $u->id]);
                }
        });
        factory(\App\Unit::class, 40)->create();
    }
}
