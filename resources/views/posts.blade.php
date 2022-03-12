@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <h1 class="display-3 text-center">
                    Posty
                </h1>
            </div>
        </div>
    </div>
    <hr><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <table id="posts_table" class="table">
                    <thead class="table-primary">
                    <tr>
                        <th class="col-sm-1">Id</th>
                        <th class="col-sm-2">Tytuł</th>
                        <th class="col-sm-3">Treść</th>
                        <th class="col-sm-2">Autor</th>
                        <th class="col-sm-2">Data utworzenia</th>
                        <th class="col-sm-2">Data edycji</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="col-sm-1">{{ $post->id }}</td>
                            <td class="col-sm-2">{{ $post->title }}</td>
                            <td class="col-sm-3">{{ $post->content }}</td>
                            <td class="col-sm-2">{{ $post->author }}</td>
                            <td class="col-sm-2">{{ $post->created_at}}</td>
                            <td class="col-sm-2">{{ $post->updated_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js-scripts')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#posts_table').DataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": false,
                "bInfo": false,
                "bAutoWidth": false,
                language: {
                    url: '{{ asset('//cdn.datatables.net/plug-ins/1.11.5/i18n/pl.json') }}'
                }
            });
        });
    </script>
@endsection
