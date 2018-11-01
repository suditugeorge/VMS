@extends('client.layout')

@section('title', 'Despre noi')

@section('content')
    @include('client.components.blog_header', [
    'blog_image_url' => '/storage/blog_profile_images/'.$oPostareBlog->code.'.jpg',
    'blog_title' => $oPostareBlog->titlu]
    )
    <div class="wrapper">
        <div class="container">
            <div class="section">
                {!! $oPostareBlog->continut !!}
            </div>
        </div>
    </div>

@endsection
