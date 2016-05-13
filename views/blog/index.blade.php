@extends('layouts.master')

@section('title')
    {{ trans('cascms.template_title_blog') }} &middot; @parent
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>{{ trans('cascms.template_title_blog') }}</h1>
            <hr>
            <?php if (isset($posts)): ?>
                <?php foreach($posts as $post): ?>
                    <h2><a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">{{ $post->title }}</a></h2>
                    <p>
                        {{ str_limit($post->content, 255) }}
                    </p>
                    <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                    <div class="clearfix"></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
@stop
