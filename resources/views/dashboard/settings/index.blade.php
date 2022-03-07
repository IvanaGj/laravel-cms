@extends('layouts.dashboard')
@section('content')

<style>
 #map {
     width: 100%;
     height: 500px;
 }
</style>


    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">SETTINGS</h4>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Title</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->title}}
                    </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">URL</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->url}}
                    </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Email</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->email}}
                    </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Description</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {!! $settings->description !!}
                    </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Logo</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        <img src="/assets/img/settings/thumbnails/{{ $settings->logo }}" alt="{{ $settings->title }}" />

                    </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Address</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->address}}
                    </p>
                </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Phone</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->phone}}
                    </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Twitter</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->twitter}}
                    </p><br>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Facebook</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->facebook}}
                    </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Skype</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->skype}}
                    </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Linkedin</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->linkedin}}
                    </p>
                </div>
            </div>
            <div class="card" style="margin-top: 20px !important;">
                <div class="card-header bg-white text-center py-3">
                    <h3 class="panel-title">Youtube</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <p class="demo-button">
                        {{$settings->youtube}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div id="map"></div>
        </div>
    </div>

    <div class="text-center">
        <a href="/admin/settings/edit/{{$settings->id}}" class="btn bg-gradient-primary w-100 my-4 mb-2">Edit Settings</a>
    </div>

@endsection



