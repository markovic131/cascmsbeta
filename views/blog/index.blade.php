@extends('layouts.master')

@section('title')
    {{ trans('cascms.template_blog_title') }} &middot; @parent
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="page-header">
                <h1>{{ trans('cascms.template_blog_title') }}</h1>
            </div>
            <?php if (isset($posts)): ?>
                <?php foreach($posts as $post): ?>
                    <h2><a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">{{ $post->title }}</a></h2>
                    <p>
                        {!! str_limit($post->content, 255) !!}
                    </p>
                    <p>
                        <small>{{ trans('cascms.template_blog_published') }} {{ $post->created_at->format('d.m.Y') }}</small>
                    </p>
                    <div class="clearfix"></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
@stop
