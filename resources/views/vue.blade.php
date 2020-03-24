@extends('layouts.front')

@section('content')
<div id="app">
    <front-page></front-page>
</div>
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('css/loading.css') }}">
@endsection

@section('scripts')
<script src="{{ mix('js/app.js') }}"></script>
@endsection
