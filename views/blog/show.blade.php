@extends('layouts.master')

@section('title')
    {{ $post->title }} &middot; @parent
@stop

@section('content')
    <div class="row">
        <div class="col-md-8">
            <ul class="breadcrumb">
                <li><a href="{{ URL::route($currentLocale . '.blog') }}">{{ trans('cascms.template_blog_title') }}</a></li>
                <li class="active">{{ $post->title }}</li>
            </ul>
            <h1>{{ $post->title }}</h1>
            <p>
                <small>{{ trans('cascms.template_blog_published') }} {{ $post->created_at->format('d.m.Y') }}</small>
            </p>
            <article>
                {!! $post->content !!}
            </article>
            <hr>
            <p>
                <?php if ($previous = $post->present()->previous): ?>
                    <a class="btn btn-primary" href="{{ route(locale() . '.blog.slug', [$previous->slug]) }}">
                        &larr; {{ trans('cascms.template_blog_previous') }}
                    </a>
                <?php endif; ?>
                <?php if ($next = $post->present()->next): ?>
                    <a class="btn btn-primary" href="{{ route(locale() . '.blog.slug', [$next->slug]) }}">
                        {{ trans('cascms.template_blog_next') }} &rarr;
                    </a>
                <?php endif; ?>
            </p>
        </div>
        <!-- <div class="col-md-4">
            @foreach($latestPosts as $post)
                <div>
                    <p>
                        <b><a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">{{ $post->title }}</a></b>
                    </p>
                </div>
            @endforeach
        </div> -->
    </div>
@stop
