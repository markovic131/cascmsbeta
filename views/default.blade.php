@extends('layouts.master')

@section('title')
    {{ $page->title }} &middot; @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="page-header">
                <h1>{{ $page->title }}</h1>
            </div>
            {!! $page->body !!}
        </div>
    </div>
@stop