<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Finchart</title>
    </head>
    <body>
        @extends('layouts.base')

        @section('content')
        <script>
            jQuery(function($){
                $.extend( $.fn.dataTable.defaults, {
                    language: {
                        url: "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Japanese.json"
                        }
                        });
                $("#fstatement_list").DataTable({
                    "searching": true,     //検索ボックスでのテキスト検索を可能にする
                    "paging":   true,      //ページングを可能にする
                    "ordering": true,      //各項目でのソートを可能にする
                    "lengthChange": true,  //件数の切り替え機能を可能にする
                    
                    }).columns.adjust().draw();
                });
        </script>
            <h1>トップページ</h1>

            <table id="fstatement_list" width="100%" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center" width="40%">会社</th>
                    <th class="text-center" width="40%">決算日</th>
                    <th class="text-center">LINK</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->created_at }}</td>
                            <td>詳細</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endsection
    </body>
</html>
