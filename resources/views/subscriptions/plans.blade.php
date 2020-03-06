@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endpush

@section('jumbotron')
    @include('partials.jumbotron',[
    'title' => __("Subscribete ahora a uno de nustros planes"),
    'icon' => 'globe'
    ])
@endsection

@section('content')
    <div class="container">
        <div class="pricing-table pricing-three-column row">

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-bronze">
                    <h2>{{ __("MENSUAL") }}</h2>
                    <span>{{ __(":price / Mes",['price' => '€ 9.99']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form',[
                            "product" => [
                                "name" => __("Subscripción"),
                                "description" => __("Mensual"),
                                "type" => "quarterly",
                                "amount" => 999,99
                             ]
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-bronze">
                    <h2>{{ __("TRIMESTRAL") }}</h2>
                    <span>{{ __(":price / 3 Mes",['price' => '€ 19.99']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form',[
                            "product" => [
                                "name" => __("Subscripción"),
                                "description" => __("Trimestral"),
                                "type" => "quarterly",
                                "amount" => 1999,99
                             ]
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-bronze">
                    <h2>{{ __("ANUAL") }}</h2>
                    <span>{{ __(":price / Mes",['price' => '€ 9.99']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form',[
                            "product" => [
                                "name" => __("Subscripción"),
                                "description" => __("Anual"),
                                "type" => "yearly",
                                "amount" => 8999,99
                             ]
                        ])
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection
