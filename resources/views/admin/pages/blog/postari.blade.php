@extends('admin.layout')

@section('title', 'Postari Blog')

@section('content')
    <div class="main-panel">
        @include('admin.components.top_bar', ['top_title' => 'Postari Blog'])

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Postari Blog</h4>
                            <div class="mr-auto"><a href="{{URL::to('/vms-admin/postare-blog')}}"
                                                    class="btn btn-success">Adauga postare</a></div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th class="text-center">
                                        Nume
                                    </th>
                                    <th>
                                        Categorie Blog
                                    </th>
                                    <th>
                                        Autor
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($postari_blog as $postare)
                                        <tr>
                                            <td class="text-center">
                                                {{$postare['id']}}
                                            </td>
                                            <td>
                                                {{$postare['titlu']}}
                                            </td>
                                            <td>
                                                {{$postare['blog_categorie']['bcategory_name']}}
                                            </td>
                                            <td>
                                                {{$postare['autor']['nume'].' '.$postare['autor']['prenume']}}
                                            </td>
                                            <td class="text-right">
                                                <a href="/vms-admin/postare-blog/{{$postare['code']}}"
                                                   rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                                </a>
                                                <a href="/vms-admin/sterge-postare-blog/{{$postare['code']}}"
                                                   rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
