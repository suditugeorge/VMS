@extends('admin.layout')

@section('title', 'Rase animale')

@section('content')
    <div class="main-panel">
        @include('admin.components.top_bar', ['top_title' => 'Rase animale'])

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Rase animale</h4>
                            <div class="mr-auto"><a href="{{URL::to('/vms-admin/animale-rasa')}}" class="btn btn-success">Adauga rasa</a></div>
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
                                    <th class="text-center">
                                        Specie
                                    </th>
                                    <th class="text-right">
                                        Actiuni
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($rase_animale as $rasa)
                                        <tr>
                                            <td class="text-center">
                                                {{$rasa['id']}}
                                            </td>
                                            <td class="text-center">
                                                {{$rasa['name']}}
                                            </td>
                                            <td class="text-center">
                                                {{$rasa['active'] ? 'Da' : 'Nu'}}
                                            </td>
                                            <td class="text-center">
                                                {{$rasa['specie']['name']}}
                                            </td>
                                            <td class="text-right">
                                                <a href="/vms-admin/animale-rasa/{{$rasa['code']}}" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                                </a>
                                                <a href="/vms-admin/sterge-animale-rasa/{{$rasa['code']}}" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer ">
                            {{$rase_animale->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
