@extends('layouts.frontend')

@section('frontend.background_image')
    <div class="background_image" style="background-image:url(images/index_hero.jpg); filter: contrast(85%) brightness(100%) saturate(75%) sepia(22%);"></div>
@endsection

@section('frontend.home_container')
    <div class="container">
        <div class="row">
            <div class="col align-items-center justify-content-center d-flex">
                <div class="home_content">
                    <div class="home_title">UROFISIO PRIME</div>
                    <h1 class="page-item text-light">Sua Saúde em primeiro lugar</h1>
                    <div class="home_text_services">
                        Fisioterapia - Pilates - Estética - Uroginecologia
                    </div>
                    {{--<div class="button home_button"><a href="#"><span>read more</span><span>read more</span></a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection