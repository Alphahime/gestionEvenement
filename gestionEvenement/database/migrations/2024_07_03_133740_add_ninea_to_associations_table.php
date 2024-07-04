<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_ninea_to_associations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNineaToAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('associations', function (Blueprint $table) {
            $table->string('ninea')->after('secteur_activite'); // Ajoute la colonne ninea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('associations', function (Blueprint $table) {
            $table->dropColumn('ninea'); // Supprime la colonne ninea si on annule la migration
        });
    }
}
