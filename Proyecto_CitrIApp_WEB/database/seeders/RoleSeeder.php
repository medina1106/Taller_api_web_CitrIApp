<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/* SPATIE */
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                        // Administrador ver todo
                        $admin = Role::create(['name' => 'admin']);

                        // Usuario solo puede ver la lista de usuario pero no puede crearlos
                        $agricultor = Role::create(['name' => 'agricultor']);
                        
                        /* Rutas compartidas ADMIN USUARIO */
        /*                 $permission = Permission::create(['name' => 'login'])->syncRoles([$admin, $user]);
                        $permission = Permission::create(['name' => 'iniciar'])->syncRoles([$admin, $user]);
                        $permission = Permission::create(['name' => 'dashboard'])->syncRoles([$admin, $user]); */
                        $permission = Permission::create(['name' => 'Home'])->syncRoles([$admin, $agricultor]);
                        $permission = Permission::create(['name' => 'agricultor.Cultivos'])->syncRoles([$admin, $agricultor]);
                        $permission = Permission::create(['name' => 'agricultor.Historial'])->syncRoles([$admin, $agricultor]);
                        $permission = Permission::create(['name' => 'agricultor.Perfil'])->syncRoles([$admin, $agricultor]);
                        $permission = Permission::create(['name' => 'agricultor.Prediccion'])->syncRoles([$admin]);
                        $permission = Permission::create(['name' => 'agricultor.nosotros'])->syncRoles([$admin, $agricultor]);
                        $permission = Permission::create(['name' => 'Admin_H'])->syncRoles([$admin]);
        
        
                        /* Rutas que solo son para el ADMIN */
    }
}
