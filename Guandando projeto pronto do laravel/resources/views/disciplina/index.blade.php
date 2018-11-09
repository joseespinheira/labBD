@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Disciplina</div>
                    <div class="card-body">
                        <a href="{{ url('/disciplina/create') }}" class="btn btn-success btn-sm" title="Add New Disciplina">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/disciplina') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Id Disciplina</th><th>Nome</th><th>Ementa</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($disciplina as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id_disciplina }}</td>
                                        <td>{{ $item->id_disciplina }}</td><td>{{ $item->nome }}</td><td>{{ $item->ementa }}</td>
                                        <td>
                                            <a href="{{ url('/disciplina/' . $item->id_disciplina) }}" title="View Disciplina"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/disciplina/' . $item->id_disciplina . '/edit') }}" title="Edit Disciplina"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/disciplina' . '/' . $item->id_disciplina) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Disciplina" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $disciplina->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
