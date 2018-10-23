<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* para uma possivel ataque*/
Route::get('/teste', function () {  return view('teste');   });


/* para popular a base de forma rapida */
Route::get('/bdpessoas', function () {  return view('BANCODADOS/pessoas');   });
Route::get('/bdcurso', function () {  return view('BANCODADOS/cursos');   });
Route::get('/bdprojeto', function () {  return view('BANCODADOS/projetos');   });
Route::get('/bdaluno', function () {  return view('BANCODADOS/alunos');   });
Route::get('/bdprofessor', function () {  return view('BANCODADOS/professors');   });
Route::get('/bddisciplina', function () {  return view('BANCODADOS/disciplinas');   });
Route::get('/bdturma', function () {  return view('BANCODADOS/turmas');   });
Route::get('/bdministra', function () {  return view('BANCODADOS/ministras');   });
Route::get('/bdmonitora', function () {  return view('BANCODADOS/monitoras');   });
Route::get('/bdaluno_-turma', function () {  return view('BANCODADOS/aluno_turmas');   });
Route::get('/bdprova', function () {  return view('BANCODADOS/provas');   });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('profile', function () {
    // Only authenticated users may enter...
    Route::resource('pessoa', 'PessoaController');
    Route::resource('curso', 'CursoController');
    Route::resource('projeto', 'ProjetoController');
    Route::resource('aluno', 'AlunoController');
    Route::resource('professor', 'ProfessorController');
    Route::resource('disciplina', 'DisciplinaController');
    Route::resource('turma', 'TurmaController');
    Route::resource('ministra', 'MinistraController');
    Route::resource('monitora', 'MonitoraController');
    Route::resource('aluno_-turma', 'Aluno_TurmaController');
    Route::resource('prova', 'ProvaController');
//})->middleware('auth');
Route::resource('professor', 'ProfessorController');
Route::resource('professor', 'ProfessorController');
Route::resource('ministra', 'MinistraController');
Route::resource('disciplina', 'DisciplinaController');
Route::resource('monitora', 'MonitoraController');
Route::resource('pessoa', 'PessoaController');
Route::resource('curso', 'CursoController');
Route::resource('projeto', 'ProjetoController');
Route::resource('aluno', 'AlunoController');
Route::resource('professor', 'ProfessorController');
Route::resource('disciplina', 'DisciplinaController');
Route::resource('turma', 'TurmaController');
Route::resource('ministra', 'MinistraController');
Route::resource('monitora', 'MonitoraController');
Route::resource('aluno_-turma', 'Aluno_TurmaController');
Route::resource('prova', 'ProvaController');