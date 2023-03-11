<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'login_count')) {
                $table->integer('login_count')->after('remember_token')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organization_categories', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'login_count')) {
                $table->dropColumn('login_count');
            }
        });
    }
};
