<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->max(20)->unique();
            $table->string('nama');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telp')->nullable();
            $table->enum('jk', ['laki-laki', 'perempuan']);
            $table->string('alamat');
            $table->string('password')->default(Hash::make('Gptu2ks'));
            $table->enum('level', ['kepala sekolah', 'tata usaha', 'guru', 'pegawai', 'admin']);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
