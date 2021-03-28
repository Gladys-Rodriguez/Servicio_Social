@extends('layouts.navbar')


@section('title', 'Inicio')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subir archivos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('user.files.store')  }}" enctype="multipart/form-data">
                    <input type="file" name="files[]" multiple>
                    

                    </form>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection