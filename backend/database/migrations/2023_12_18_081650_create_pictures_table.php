<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->timestamps();
        });

        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/arrow_up.svg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/background.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/cafe0.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/cafe1.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/cafe2.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/cafe3.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/done.svg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/favicon.ico',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/feedback1.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/feedback2.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/feedback3.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/hamburger.svg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/icon_facebook.png',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/icon_home.png',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/icon_instagram.png',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/icon_mail.png',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/icon_phone.png',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/icon_youtube.png',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/location.svg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/logo.png',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/office0.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/office1.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/office2.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/office3.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/post.png',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/service-design.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/service-renovation.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/service-turnkey.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/slider1.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/slider2.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/slider3.jpg',
            ]
        );
        DB::table('pictures')->insert(
            [
                'path' => 'src/assets/img/slider4.jpg',
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pictures');
    }
};
