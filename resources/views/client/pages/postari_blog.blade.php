@extends('client.layout')

@section('title', 'Postari Blog')

@section('content')
    @include('client.components.company-description')
    <div class="wrapper">
        <div class="container">
            <div class="section">
                <div class="row">
                    @foreach($oPostariBlog as $oPostareBlog)
                        <div class="col-md-4">
                            <div class="card card-plain card-blog">
                                <div class="card-image">
                                    <a href="{{URL::to('/postare-blog/'.$oPostareBlog->code)}}">
                                        <img class="img rounded img-raised" src="{{URL::asset('/storage/blog_profile_images/'.$oPostareBlog->code.'.jpg')}}" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="category text-info">{{$oPostareBlog->blog_categorie->bcategory_name}}</h6>
                                    <h4 class="card-title">
                                        <a href="{{URL::to('/postare-blog/'.$oPostareBlog->code)}}">{{$oPostareBlog->titlu}}r</a>
                                    </h4>
                                    <p class="card-description">
                                        {{str_limit(strip_tags($oPostareBlog->continut), 50, '...')}}
                                        <a href="#pablo"> Read More </a>
                                    <div class="author">
                                        {{--<img src="../assets/img/olivia.jpg" alt="..." class="avatar img-raised">--}}
                                        <span>{{$oPostareBlog->autor->nume.' '.$oPostareBlog->autor->prenume}}</span>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
