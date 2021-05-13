@extends('layouts.main-layout')

@section('title', $post->title)

@section('content')

    @include('includes.categories')

    <article class="shadow p-5">
        {!! $post->text !!}
    </article>
    <a href="{{route('getPostsByCategory', $slug_category)}}" class="btn btn-secondary mt-4">Back</a>

@endsection
