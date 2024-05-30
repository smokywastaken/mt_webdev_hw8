@extends('layouts.master')

@section('title', 'Twitter by dumbass')
@section('header')
    <x-header />
@endsection
@section('sidebar')
    <x-sidebar />
@endsection
@section('content')
<div class="container mt-4">
    @include('posts.create')
    @include('posts.index')
</div>
@endsection