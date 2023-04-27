<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Médico']);

        Permission::create(['name' => 'admin.home','description' => 'Ver el Dashboard'])->syncRoles([$role1, $role2]);


        Permission::create(['name' => 'admin.users.index','description' => 'Ver listado de Médicos'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.create','description' => 'Crear un Médico'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit','description' => 'Editar un Médico'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.destroy','description' => 'Eliminar Médicos'])->syncRoles([$role1]);
        
        Permission::create(['name' => 'admin.roles.index','description' => 'Ver listado de Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create','description' => 'Crear Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit','description' => 'Editar Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy','description' => 'Eliminar Rol'])->syncRoles([$role1]);
        
        Permission::create(['name' => 'admin.sexo.index','description' => 'Ver listado de  Sexo Paciente'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.sexo.create','description' => 'Crear   Sexo Paciente'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.sexo.edit','description' => 'Editar   Sexo Paciente'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.sexo.destroy','description' => 'Eliminar  Sexo Paciente'])->syncRoles([$role1]);
    
        Permission::create(['name' => 'admin.paciente.index','description' => 'Ver listado de Pacientes'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.paciente.create','description' => 'Crear Paciente'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.paciente.edit','description' => 'Editar Paciente'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.paciente.destroy','description' => 'Eliminar Paciente'])->syncRoles([$role1]);

                
        Permission::create(['name' => 'admin.medicamento.index','description' => 'Ver listado de  Medicamento'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.medicamento.create','description' => 'Crear  Medicamento'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.medicamento.edit','description' => 'Editar  Medicamento'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.medicamento.destroy','description' => 'Eliminar  Medicamento'])->syncRoles([$role1]);

                
        Permission::create(['name' => 'admin.administracion.index','description' => 'Ver listado de  Administración'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.administracion.create','description' => 'Crear  Administración'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.administracion.edit','description' => 'Editar  Administración'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.administracion.destroy','description' => 'Eliminar  Administración'])->syncRoles([$role1]);
       
        Permission::create(['name' => 'admin.gruposcie10.index','description' => 'Ver listado de  Grupos CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.gruposcie10.create','description' => 'Crear  Grupo CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.gruposcie10.edit','description' => 'Editar  Grupo CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.gruposcie10.destroy','description' => 'Eliminar  Grupo CIE-10'])->syncRoles([$role1]);
       
        Permission::create(['name' => 'admin.subgruposcie10.index','description' => 'Ver listado de sub Grupos CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.subgruposcie10.create','description' => 'Crear  sub Grupo CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.subgruposcie10.edit','description' => 'Editar  sub Grupo CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.subgruposcie10.destroy','description' => 'Eliminar sub Grupo CIE-10'])->syncRoles([$role1]);
       
        Permission::create(['name' => 'admin.categoriascie10.index','description' => 'Ver listado de  Categorias CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categoriascie10.create','description' => 'Crear   Categoria CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categoriascie10.edit','description' => 'Editar   Categoria CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categoriascie10.destroy','description' => 'Eliminar  Categoria CIE-10'])->syncRoles([$role1]);
       
        Permission::create(['name' => 'admin.diagnosticoscie10.index','description' => 'Ver listado de  Diagnósticos CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.diagnosticoscie10.create','description' => 'Crear   Diagnóstico CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.diagnosticoscie10.edit','description' => 'Editar   Diagnóstico CIE-10'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.diagnosticoscie10.destroy','description' => 'Eliminar  Diagnóstico CIE-10'])->syncRoles([$role1]);
       

        Permission::create(['name' => 'admin.alergia.index','description' => 'Ver listado de  Alergias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.alergia.create','description' => 'Crear   Alergias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.alergia.edit','description' => 'Editar   Alergias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.alergia.destroy','description' => 'Eliminar  Alergias'])->syncRoles([$role1]);
       
        
        Permission::create(['name' => 'admin.receta.index','description' => 'Ver listado de Recetas  '])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.receta.show','description' => 'Detalle de Receta  '])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.receta.create','description' => 'Crear  Receta '])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.receta.edit','description' => 'Editar Receta '])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.receta.destroy','description' => 'Eliminar Receta '])->syncRoles([$role1]);
      
          
    }
}
