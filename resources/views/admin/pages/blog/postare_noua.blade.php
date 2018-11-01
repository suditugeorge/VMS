@extends('admin.layout')

@if($aPostareDeEditat !== null)
    @section('title', 'Postare Blog '.$aPostareDeEditat['titlu'])
@else
    @section('title', 'Postare Blog noua')
@endif

@section('content')
    <div class="main-panel">
        @include('admin.components.top_bar', ['top_title' => 'Postare Blog'])

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Postare Blog {{$aPostareDeEditat !== null ? $aPostareDeEditat['titlu'] : ''}}</h4>
                        @if(isset($errors) && count($errors) > 0)
                            @foreach($errors as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                    <form method="POST" action="{{$url_formular}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <label>Titlu</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="postare_nume" name="postare_nume" value="{{$aPostareDeEditat !== null ? $aPostareDeEditat['titlu'] : ''}}">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label>Parinte</label>
                                    <div class="form-group">
                                        <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Parinte" id="categorie_parinte" name="categorie_parinte">
                                            @foreach($categorii_blog as $categorie)
                                                <option value="{{$categorie['id']}}" {{isset($aPostareDeEditat) && $aPostareDeEditat['blog_categorie']['id'] == $categorie['id'] ? 'selected' : ''}}>{{$categorie['bcategory_name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label>Activ</label>
                                    <div class="form-group">
                                        @if($aPostareDeEditat != null)
                                            <input type="checkbox" {{$aPostareDeEditat['active'] ? 'checked' : ''}} name="post_active" class="bootstrap-switch" data-wrapper-class="align-middle" data-on-label="DA" data-off-label="NU" />
                                        @else
                                            <input type="checkbox" checked name="post_active" class="bootstrap-switch" data-wrapper-class="align-middle" data-on-label="DA" data-off-label="NU" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <label>Imagine de profil</label>
                            <div class="form-group">
                                @if($aPostareDeEditat != null)
                                    <div class="fileinput fileinput-exists text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{URL::asset('/core_images/image_placeholder.jpg')}}" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" id="poza_profil">
                                            <img src="{{$aPostareDeEditat['blog_imagine']}}" alt="...">
                                        </div>
                                        <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                          <span class="fileinput-new">Selecteaza imaginea</span>
                                          <span class="fileinput-exists">Schimba imaginea</span>
                                          <input type="file" name="poza_profil" />
                                        </span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Sterge</a>
                                        </div>
                                    </div>
                                @else
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{URL::asset('/core_images/image_placeholder.jpg')}}" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" id="poza_profil"></div>
                                        <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                          <span class="fileinput-new">Selecteaza imaginea</span>
                                          <span class="fileinput-exists">Schimba imaginea</span>
                                          <input type="file" name="poza_profil" />
                                        </span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Sterge</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <label>Continut</label>
                            <div class="form-group">
                                {{--Editor--}}
                                <textarea  id="summernote" name="continut_blog">{{$aPostareDeEditat['continut']}}</textarea>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-fill btn-primary" id="creeaza-postare">
                                <i class="fas fa-spinner fa-spin hidden"></i><span class="button-text">Creeaza postare</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{URL::asset('/admin/plugin/summernote/dist/summernote-bs4.css')}}" rel="stylesheet" />
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ URL::asset('/admin/plugin/summernote/dist/summernote-bs4.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/admin/js/features/blog_postari.js') }}"></script>
@endpush
