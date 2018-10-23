@extends('admin.layout')

@section('title', 'Categorii Blog')

@section('content')
    <div class="main-panel">
        @include('admin.components.top_bar', ['top_title' => 'Categorii Blog'])

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Categorii Blog</h4>
                            <div class="mr-auto"><a href="{{URL::to('/vms-admin/adauga-categorie-blog')}}" class="btn btn-success">Adauga categorie</a></div>
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
                                        Parinte
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>
                                    </thead>
                                    <tbody>
                                        @foreach($categorii_blog as $categorie)
                                            <tr>
                                                <td class="text-center">
                                                    {{$categorie['id']}}
                                                </td>
                                                <td>
                                                    {{$categorie['bcategory_name']}}
                                                </td>
                                                <td>
                                                    @if(is_array($categorie['parinte']))
                                                        {{$categorie['parinte']['bcategory_name']}}
                                                    @else
                                                        Categorie implicita
                                                    @endif
                                                </td>
                                                <td class="text-right">
                                                    <a href="/vms-admin/editeaza-categorie-blog/{{$categorie['id']}}" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                                    </a>
                                                    <a href="/vms-admin/sterge-categorie-blog/{{$categorie['id']}}" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
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
