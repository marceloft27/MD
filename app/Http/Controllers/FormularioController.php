<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function rate(Request $request)
    {
        $formId = $request->input('form_id');
        $ratings = $request->input('ratings');

        // Dados adicionais com valor padrão 1
        $entrevistadoPerfil = $request->input('entrevistado_perfil');
        $email = $request->input('email');
        $tempoAtuacao = $request->input('tempo_atuacao');
        $cargo = $request->input('cargo');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $ramoAtividade = $request->input('ramo_atividade');
        $numFuncionarios = $request->input('num_funcionarios');
        $faturamentoAnual = $request->input('faturamento_anual');
        $idadeOrganizacao = $request->input('idade_organizacao');
        $areaTransformacaoDigital = $request->input('area_transformacao_digital');
        $anosTransformacaoDigital = $request->input('anos_transformacao_digital');

        // Verifique se $ratings é um array antes de iterar
        if (is_array($ratings)) {
            foreach ($ratings as $questionId => $rating) {
                Formulario::create([
                    'form_id' => $formId,
                    'question_id' => $questionId,
                    'rating' => $rating,
                    // Dados adicionais
                    'entrevistado_perfil' => $entrevistadoPerfil,
                    'email' => $email,
                    'tempo_atuacao' => $tempoAtuacao,
                    'cargo' => $cargo,
                    'cidade' => $cidade,
                    'estado' => $estado,
                    'ramo_atividade' => $ramoAtividade,
                    'num_funcionarios' => $numFuncionarios,
                    'faturamento_anual' => $faturamentoAnual,
                    'idade_organizacao' => $idadeOrganizacao,
                    'area_transformacao_digital' => $areaTransformacaoDigital,
                    'anos_transformacao_digital' => $anosTransformacaoDigital,
                ]);
            }
        }
        // Redirecione para a página desejada com os parâmetros
        return redirect()->route('resultado', [
            'form_id' => $formId,
            'ratings' => $ratings,
            'entrevistado_perfil' => $entrevistadoPerfil,
            'email' => $email,
            'tempo_atuacao' => $tempoAtuacao,
            'cargo' => $cargo,
            'cidade' => $cidade,
            'estado' => $estado,
            'ramo_atividade' => $ramoAtividade,
            'num_funcionarios' => $numFuncionarios,
            'faturamento_anual' => $faturamentoAnual,
            'idade_organizacao' => $idadeOrganizacao,
            'area_transformacao_digital' => $areaTransformacaoDigital,
            'anos_transformacao_digital' => $anosTransformacaoDigital,

        ]);
    }


    public function showResultado(Request $request)
    {
        $formId = $request->input('form_id');
        $ratings = $request->input('ratings');
        $entrevistadoPerfil = $request->input('entrevistado_perfil');
        $email = $request->input('email');
        $tempoAtuacao = $request->input('tempo_atuacao');
        $cargo = $request->input('cargo');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $ramoAtividade = $request->input('ramo_atividade');
        $numFuncionarios = $request->input('num_funcionarios');
        $faturamentoAnual = $request->input('faturamento_anual');
        $idadeOrganizacao = $request->input('idade_organizacao');
        $areaTransformacaoDigital = $request->input('area_transformacao_digital');
        $anosTransformacaoDigital = $request->input('anos_transformacao_digital');
        // Passe os dados para a view
        return view('resultado', compact('formId', 'ratings', 'entrevistadoPerfil', 'email', 'tempoAtuacao', 'cargo', 'cidade', 'estado', 'ramoAtividade', 'numFuncionarios', 'faturamentoAnual', 'idadeOrganizacao', 'areaTransformacaoDigital', 'anosTransformacaoDigital'));

    }



    public function showForm()
    {
        // Gera um novo form_id
        $formId = DB::table('formularios')->max('form_id') + 1;

        // Passa o form_id para a visualização do formulário
        return view('forms')->with('formId', $formId);
    }
}
