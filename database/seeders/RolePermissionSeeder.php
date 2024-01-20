<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin', 'guard_name' => 'web', 'created_at' =>now(), 'updated_at' => now()], //comment('This is a super admin role.')
            ['name' => 'user-admin', 'guard_name' => 'web', 'created_at' =>now(), 'updated_at' => now()], //comment('This is an vendor admin role.')
            ['name' => 'customer', 'guard_name' => 'web', 'created_at' =>now(), 'updated_at' => now()], // comment('This is a customer role.')
        ];
        DB::table('roles')->insert($roles);


        $permissions = [
            [
                'name' => 'product-list', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'create-product', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'edit-product', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'delete-product', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],

            [
                'name' => 'content-list', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'create-content', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'edit-content', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'delete-content', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],

            [
                'name' => 'order-list', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'create-order', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'edit-order', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'delete-order', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],

            [
                'name' => 'customer-list', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'create-customer', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()],
            [
                'name' => 'edit-customer', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'delete-customer', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],

            [
                'name' => 'create-coupon', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'edit-coupon', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'delete-coupon', 
                'guard_name' => 'web', 
                'created_at' =>now(), 
                'updated_at' => now()
            ],
        ];
        DB::table('permissions')->insert($permissions);
    }
}
