<?php

use Illuminate\Database\Seeder;
use App\User;

class SeederGeral extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instituicao = [
            'Instituicao_Nome' => 'Instituto Federal de Mato Grosso Campus Olegário Baldo',
            'Instituicao_CNPJ' => '12345678912345',
            'Instituicao_Endereco' => 'Rua alguma coisa',
            'Instituicao_Bairro' => 'Algum',
            'Instituicao_Numero' => 'S/N'
        ];

        \App\Models\Dashboard\Instituicoes::create($instituicao);

        $usuarios = [
            0 => [
                'name' => 'Professor Teste',
                'email' => 'professor@gmail.com',
                'password' => bcrypt('123456')
            ],
            1 => [
                'name' => 'Aluno Teste',
                'email' => 'aluno1@gmail.com',
                'password' => bcrypt('123456'),
            ]
        ];

        $roleAluno = \Artesaos\Defender\Facades\Defender::createRole('aluno');
        $roleProfessor = \Artesaos\Defender\Facades\Defender::createRole('professor');

        foreach ($usuarios as $key => $u){
            $user = \App\User::create($u);
            if ($key == 0){
                $user->attachRole($roleProfessor);
            }else{
                $user->attachRole($roleAluno);
            }
        }

        $professor = [
            'Professor_Nome' => 'Professor Teste',
            'Professor_CPF' => '00000000000',
            'Professor_RG' => '00000000',
            'Professor_Email' => 'professor@gmail.com',
            'User_ID' => 1
        ];

        \App\Models\Dashboard\Professores::create($professor);

        $aluno = [
            'Aluno_Nome' => 'Aluno Teste',
            'Aluno_CPF' => '12345678900',
            'Aluno_Matricula' => '123456789',
            'Instituicao_ID' => 1,
            'User_ID' => 2
        ];

        $aluno = \App\Models\Dashboard\Alunos::create($aluno);

        $instituicao_professores = [
            'Instituicao_ID' => 1,
            'Professor_ID' => 1
        ];

        \App\Models\Dashboard\InstituicoesProfessores::create($instituicao_professores);
    }
}
