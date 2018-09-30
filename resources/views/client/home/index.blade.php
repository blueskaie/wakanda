@extends('layouts.main')

@section('mycss')
    <link href="{{ asset('maintheme/css/blogstyle.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12 justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                @include('client/home/bloglist')                
            </div>
            <div class="col-lg-4 col-md-4">
                @include('layouts.includes.siderbar')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</section>
@endsection