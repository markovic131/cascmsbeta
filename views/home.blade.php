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
        <div class="col-md-8">
            {!! $page->body !!}
        </div>
    </div>
@stop