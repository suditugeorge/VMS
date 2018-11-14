@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="main-panel">
        @include('admin.components.top_bar', ['top_title' => 'Dashboard'])
    </div>
@endsection
