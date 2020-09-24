@extends('layouts.app')

@section('content')
<div class="overlay">
    <div class="container landing-content" >
        <div class="row justify-content-center">
            <div class="col-md-12">
                <img src="{{ asset('img/voisty_logo_white_shadow.png') }}" width="200px" alt="Logo">
            </div>
            <div class="col-md-12">
                <h1 class="title-landing-header mb-3">Welcome to Voisty!</h1>
            </div>
            <div class="col-md-12">
                <h2 class="title-landing">The Online helping tool <br />for university students</h2>
            </div>
            <div class="col-md-12 mt-5">
                <a class="btn btn-info" id="started-button" href="{{ route('register') }}" role="button">Get Started</a>
            </div>
            
            
        </div>
    </div>
</div>
    
@endsection