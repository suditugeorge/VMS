@extends('admin.layout')

@section('title', 'Specii animale')

@section('content')
    <div class="main-panel">
        @include('admin.components.top_bar', ['top_title' => 'Specii animale'])

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Specii animale</h4>
                            <div class="mr-auto"><a href="{{URL::to('/vms-admin/animale-specie')}}" class="btn btn-success">Adauga specie</a></div>
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
                                    <th class="text-center">
                                        Activ
                                    </th>
                                    <th class="text-right">
                                        Actiuni
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($specii_animale as $specie)
                                        <tr>
                                            <td class="text-center">
                                                {{$specie['id']}}
                                            </td>
                                            <td class="text-center">
                                                {{$specie['name']}}
                                            </td>
                                            <td class="text-center">
                                                {{$specie['active'] ? 'Da' : 'Nu'}}
                                            </td>
                                            <td class="text-right">
                                                <a href="/vms-admin/animale-specie/{{$specie['code']}}" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                                </a>
                                                <a href="/vms-admin/sterge-animale-specie/{{$specie['code']}}" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
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
