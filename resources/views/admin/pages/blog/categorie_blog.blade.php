@extends('admin.layout')

@section('title', 'Categorie Blog noua')

@section('content')
    <div class="main-panel">
        @include('admin.components.top_bar', ['top_title' => 'Categorie Blog '. $pagina_text['titlu']])

        <div class="content">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Categorie Blog {{$pagina_text['titlu']}}</h4>
                    </div>
                    <div class="card-body">
                        <label>Denumire categorie</label>
                        <div class="form-group">
                            @if(isset($categorie_de_editat))
                                <input type="text" class="form-control" id="categorie-nume" value="{{$categorie_de_editat['bcategory_name']}}">
                                <input type="hidden" id="categorie-code" value="{{$categorie_de_editat['code']}}">
                            @else
                                <input type="text" class="form-control" id="categorie-nume">
                                <input type="hidden" id="categorie-code" value="">
                            @endif
                        </div>
                        <label>Parinte</label>
                        <div class="form-group">
                            <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Parinte" id="categorie-parinte">
                                @foreach($categorii_blog as $categorie)
                                    <option value="{{$categorie['id']}}" {{isset($categorie_de_editat) && $categorie_de_editat['parinte']['id'] == $categorie['id'] ? 'selected' : ''}}>{{$categorie['bcategory_name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-fill btn-primary" id="{{$pagina_text['buton_formular_id']}}">
                            <i class="fas fa-spinner fa-spin hidden"></i><span class="button-text">{{$pagina_text['buton_formular_text']}}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script async type="text/javascript" src="{{ URL::asset('/admin/js/features/blog_categorie.js') }}"></script>
@endpush
