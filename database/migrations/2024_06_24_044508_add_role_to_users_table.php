<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
    Schema::table('users', function (Blueprint $table) {
        $users = User::all();

        $table->string('role')->default('mahasiswa')->change(); // Misalnya, peran default adalah 'mahasiswa'

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $users = User::all();
            $table->string('role')->nullable()->change();

        });
    }
};
