<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE autoreplies MODIFY COLUMN type ENUM('text', 'button', 'image', 'template', 'list', 'media', 'vcard', 'location', 'sticker', 'product')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE autoreplies MODIFY COLUMN type ENUM('text', 'button', 'image', 'template', 'list', 'media', 'vcard', 'location', 'sticker')");
    }
};
