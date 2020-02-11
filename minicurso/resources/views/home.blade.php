@extends('layouts.app')

@section('js')
@parent
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
@endsection

@section('css')
@parent
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-table"></i> Mapa de Notas
                    <button type="button" class="btn btn-primary float-right"><i class="fa fa-plus-circle"></i> Novo</button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="mapa-notas" class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Aluno(a)</th>
                            <th scope="col">Disciplina</th>
                            <th scope="col">AP1</th>
                            <th scope="col">AP2</th>
                            <th scope="col">AP3</th>
                            <th scope="col">MD</th>
                            <th scope="col">SIT</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($notas as $n)
                          <tr>
                            <th scope="row">{{ $n->id }}</th>
                            <td>{{ $n->aluno->nome }}</td>
                            <td>{{ $n->turma->disciplina }}</td>
                            <td>{{ $n->ap1 }}</td>
                            <td>{{ $n->ap2 }}</td>
                            <td>{{ $n->ap3 }}</td>
                            <td>{{ $n->media() }}</td>
                            <td>{{ $n->sit() }}</td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#mapa-notas').DataTable();
    } );
</script>
@endsection
