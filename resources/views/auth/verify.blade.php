@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                        {{ __('Un link de verificación ha sido enviado a tu correo electronico') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, revisa tu correo ya que se te envio un link de verificación.') }}
                    {{ __('Si tu no recibiste el email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click aqui para recibir uno nuevo') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
