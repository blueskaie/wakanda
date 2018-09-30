@extends('layouts.default')

@section('head')

    @include('layouts.includes.head')
    @yield('mycss')
    
@endsection

@section('body')
    <div class="container-fluid">
        @include('layouts.includes.slider')

        @include('layouts.includes.topmenubar')

        @yield('content')
        
        @include('layouts.includes.footer')
    </div>
@endsection

@section('js')
    @include('layouts.includes.js')
    @yield('myjs')
@endsection
