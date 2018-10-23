@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Prova {{ $prova->id_disciplina,id_curso,ano_semestre,matricula_aluno,descricao }}</div>
                    <div class="card-body">

                        <a href="{{ url('/prova') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/prova/' . $prova->id_disciplina,id_curso,ano_semestre,matricula_aluno,descricao . '/edit') }}" title="Edit Prova"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('prova' . '/' . $prova->id_disciplina,id_curso,ano_semestre,matricula_aluno,descricao) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Prova" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $prova->id_disciplina,id_curso,ano_semestre,matricula_aluno,descricao }}</td>
                                    </tr>
                                    <tr><th> Id Disciplina </th><td> {{ $prova->id_disciplina }} </td></tr><tr><th> Id Curso </th><td> {{ $prova->id_curso }} </td></tr><tr><th> Ano Semestre </th><td> {{ $prova->ano_semestre }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
