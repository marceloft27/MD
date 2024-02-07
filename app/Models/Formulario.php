<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Formulario extends Model
    {
        use HasFactory;

        protected $fillable = [
            'form_id',
            'question_id',
            'rating',
            'entrevistado_perfil',
            'email',
            'tempo_atuacao',
            'cargo',
            'cidade',
            'estado',
            'ramo_atividade',
            'num_funcionarios',
            'faturamento_anual',
            'idade_organizacao',
            'area_transformacao_digital',
            'anos_transformacao_digital',
        ];
    }

