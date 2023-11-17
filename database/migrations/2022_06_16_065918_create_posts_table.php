<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('excerpt');
            $table->string('image')->nullable();
            $table->foreignId('post_status_id');

            $table->text('barang1');
            $table->string('jumlah1');
            $table->text('satuan1');
            $table->text('kondisi1');
            $table->text('barang2');
            $table->string('jumlah2');
            $table->text('satuan2');
            $table->text('kondisi2');
            $table->text('barang3');
            $table->string('jumlah3');
            $table->text('satuan3');
            $table->text('kondisi3');
            $table->text('barang4');
            $table->string('jumlah4');
            $table->text('satuan4');
            $table->text('kondisi4');
            $table->text('barang5');
            $table->string('jumlah5');
            $table->text('satuan5');
            $table->text('kondisi5');
            $table->text('barang6');
            $table->string('jumlah6');
            $table->text('satuan6');
            $table->text('kondisi6');
            $table->text('barang7');
            $table->string('jumlah7');
            $table->text('satuan7');
            $table->text('kondisi7');
            $table->text('barang8');
            $table->string('jumlah8');
            $table->text('satuan8');
            $table->text('kondisi8');
            $table->text('barang9');
            $table->string('jumlah9');
            $table->text('satuan9');
            $table->text('kondisi9');
            $table->text('barang10');
            $table->string('jumlah10');
            $table->text('satuan10');
            $table->text('kondisi10');
            $table->text('barang11');
            $table->string('jumlah11');
            $table->text('satuan11');
            $table->text('kondisi11');
            $table->text('barang12');
            $table->string('jumlah12');
            $table->text('satuan12');
            $table->text('kondisi12');
            $table->text('barang13');
            $table->string('jumlah13');
            $table->text('satuan13');
            $table->text('kondisi13');
            $table->text('barang14');
            $table->string('jumlah14');
            $table->text('satuan14');
            $table->text('kondisi14');
            $table->text('barang15');
            $table->string('jumlah15');
            $table->text('satuan15');
            $table->text('kondisi15');
            $table->text('barang16');
            $table->string('jumlah16');
            $table->text('satuan16');
            $table->text('kondisi16');
            $table->text('barang17');
            $table->string('jumlah17');
            $table->text('satuan17');
            $table->text('kondisi17');
            $table->text('barang18');
            $table->string('jumlah18');
            $table->text('satuan18');
            $table->text('kondisi18');;
            $table->text('barang19');
            $table->string('jumlah19');
            $table->text('satuan19');
            $table->text('kondisi19');
            $table->text('barang20');
            $table->string('jumlah20');
            $table->text('satuan20');
            $table->text('kondisi20');


            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
