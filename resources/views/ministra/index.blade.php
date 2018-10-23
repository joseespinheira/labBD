@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Ministra</div>
                    <div class="card-body">
                        <a href="{{ url('/ministra/create') }}" class="btn btn-success btn-sm" title="Add New Ministra">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/ministra') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Id Disciplina</th><th>Id Curso</th><th>Ano Semestre</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ministra as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id_disciplina,id_curso,ano_semestre,matricula_professor }}</td>
                                        <td>{{ $item->id_disciplina }}</td><td>{{ $item->id_curso }}</td><td>{{ $item->ano_semestre }}</td>
                                        <td>
                                            <a href="{{ url('/ministra/' . $item->id_disciplina,id_curso,ano_semestre,matricula_professor) }}" title="View Ministra"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/ministra/' . $item->id_disciplina,id_curso,ano_semestre,matricula_professor . '/edit') }}" title="Edit Ministra"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/ministra' . '/' . $item->id_disciplina,id_curso,ano_semestre,matricula_professor) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Ministra" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $ministra->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
