@extends('_layouts.master')

@section('body')

<h1>Posts</h1>

<ul>
@foreach($posts as $post)
    <li>
        <a href="{{$post->getPath()}}">{{$post->title}}</a>
    </li>
@endforeach
</ul>