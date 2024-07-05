<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
        // Réinitialise le cache des rôles et des permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Crée des permissions pour admin
        Permission::create(['name' => 'activer association']); // Permission pour activer une association
        Permission::create(['name' => 'desactiver association']); // Permission pour désactiver une association
        Permission::create(['name' => 'supprimer association']); // Permission pour supprimer une association
        Permission::create(['name' => 'supprimer user']); // Permission pour supprimer un utilisateur
        Permission::create(['name' => 'supprimer evenement']); // Permission pour supprimer un événement
        Permission::create(['name' => 'creer role']); // Permission pour créer un rôle

        // Crée des permissions pour association
        Permission::create(['name' => 'modifier association']); // Permission pour modifier une association
        Permission::create(['name' => 'ajouter evenement']); // Permission pour ajouter un événement
        Permission::create(['name' => 'modifier evenement']); // Permission pour modifier un événement

        // Crée des rôles et assigne des permissions
        // Pour l'admin
        $roleAdmin= Role::create(['name' => 'admin']);
        $roleAdmin->givePermissionTo([
            'activer association',
            'desactiver association',
            'supprimer association',
            'supprimer user',
            'supprimer evenement',
            'creer role',
        ]);

        // Pour l'association
        $roleAssociation= Role::create(['name' => 'association']);
         Role::create(['name' => 'user']);

        $roleAssociation->givePermissionTo([
            'modifier association',
            'ajouter evenement',
            'supprimer evenement',
            'modifier evenement',
        ]);
    }
    }