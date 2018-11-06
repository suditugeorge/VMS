@extends('admin.layout')

@section('title', 'Specie animal')

@section('content')
    <div class="main-panel">
        @include('admin.components.top_bar', ['top_title' => 'Specie animal '. isset($specie_de_editat) ? $specie_de_editat['name'] : ''])

        <div class="content">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Specie animal {{isset($specie_de_editat) ? $specie_de_editat->name : ''}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label>Denumire specie</label>
                                <div class="form-group">
                                    @if(isset($specie_de_editat))
                                        <input type="text" class="form-control" id="specie-nume" value="{{$specie_de_editat['name']}}">
                                        <input type="hidden" id="specie-code" value="{{$specie_de_editat['code']}}">
                                    @else
                                        <input type="text" class="form-control" id="specie-nume">
                                        <input type="hidden" id="specie-code" value="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label>Activ</label>
                                <div class="form-group">
                                    @if($specie_de_editat != null)
                                        <input type="checkbox" {{$specie_de_editat['active'] ? 'checked' : ''}} name="specie_active" class="bootstrap-switch" data-wrapper-class="align-middle" data-on-label="DA" data-off-label="NU" />
                                    @else
                                        <input type="checkbox" checked name="specie_active" class="bootstrap-switch" data-wrapper-class="align-middle" data-on-label="DA" data-off-label="NU" />
                                    @endif
                                </div>
                            </div>
                        </div>

                        <label>Descriere scurta</label>
                        <div class="form-group">
                            <textarea class="form-control" id="specie-descriere" rows="25">{{isset($specie_de_editat) ? $specie_de_editat['description'] : ''}}</textarea>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-fill btn-primary" id="salveaza-specie" data-url="{{$general_data['current_url']}}">
                            <i class="fas fa-spinner fa-spin hidden"></i><span class="button-text">Salveaza</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script async type="text/javascript" src="{{ URL::asset('/admin/js/features/specii_animale.js') }}"></script>
@endpush
