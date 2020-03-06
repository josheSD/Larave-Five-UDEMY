@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron',[
    'title' => __("Manejar mis suscripciones"),
    'icon' => 'globe'
    ])
@endsection

@section('content')

    <div class="pl-5 pr-5">
        <div class="row justify-content around">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Plan</th>
                        <th>ID suscripción</th>
                        <th>Cantidad</th>
                        <th>Alta</th>
                        <th>Finaliza</th>
                        <th>Cancelar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($subscriptions as $subscription)
                        <td>{{ $subscription->id }}</td>
                        <td>{{ $subscription->name }}</td>
                        <td>{{ $subscription->stripe_plan }}</td>
                        <td>{{ $subscription->stripe_id }}</td>
                        <td>{{ $subscription->quantity }}</td>
                        <td>{{ $subscription->created_at->format('d/m/Y') }}</td>
                        <td>{{ $subscription->ends_at ? $subscription->ends_at->format('d/m/Y') : __('Suscripción activa') }}</td>
                        <td>
                            @if($subscription->ends_at)
                                <form action="{{ route('subscriptions.resume') }}"
                                        method="POST">
                                        @csrf
                                    <input type="hidden" name="plan"
                                    value="{{ $subscription->name }}">
                                    <button class="btn btn-success">
                                        {{ __("Reanudar") }}
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('subscriptions.cancel') }}"
                                      method="POST">
                                    @csrf
                                    <input type="hidden" name="plan"
                                           value="{{ $subscription->name }}">
                                    <button class="btn btn-danger">
                                        {{ __("Cancel") }}
                                    </button>
                                </form>
                            @endif
                        </td>
                    @empty
                        <tr>
                            <td colspan="8">{{ __("No hay ninguna suscripción disponible") }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection