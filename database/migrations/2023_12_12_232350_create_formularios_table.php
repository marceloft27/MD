<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->integer('form_id');
            $table->integer('question_id');
            $table->integer('rating');
            $table->string('entrevistado_perfil')->nullable();
            $table->string('email')->nullable();
            $table->string('tempo_atuacao')->nullable();
            $table->string('cargo')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('ramo_atividade')->nullable();
            $table->string('num_funcionarios')->nullable();
            $table->string('faturamento_anual')->nullable();
            $table->string('idade_organizacao')->nullable();
            $table->string('area_transformacao_digital')->nullable();
            $table->string('anos_transformacao_digital')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
