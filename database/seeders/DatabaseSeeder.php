<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use App\Models\Type;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       Type::create(['name'=>'shop']);

        //membuat User
        $users = [
            [
                'name' => 'Yoga',
                'email' => 'yoga@gmail.com',
                'password' => bcrypt(123),
            ],
            [
                'name' => 'Krisna',
                'email' => 'krisna@gmail.com',
                'password' => bcrypt(123),

            ],
        ];

        foreach ($users as $usr) 
        {
            User::create($usr);    
        }
        

        Role::create(['name' => 'Petugas']);
        Role::create(['name' => 'Pengunjung']);
        $petugas = User::where('id',1)->first();
        $pengunjung = User::where('id',2)->first();

        $jabatan_petugas = Role::findById(1);
        $jabatan_pengunjung = Role::findById(2);

        $petugas->assignRole($jabatan_petugas);
        $pengunjung->assignRole($jabatan_pengunjung);

        Permission::create(['name' => 'kelola kategori']);
        Permission::create(['name' => 'kelola produk']);

    }
}
