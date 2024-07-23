@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <form action="{{ route('admin.project.store') }}" method="POST" class="mt-5">
            @csrf

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control @if ($errors->get('nome')) is-invalid @endif"
                    id="exampleFormControlInput1" name="nome">
                @if ($errors->get('nome'))
                <div class="invalid-feedback">
                    @foreach ($errors->get('nome') as $error )
                    {{ $error }}
                    @endforeach
                </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Repository</label>
                <input type="text" class="form-control @if ($errors->get('repository')) is-invalid @endif"
                    id="exampleFormControlInput1" name="repository">
                @if ($errors->get('repository'))
                <div class="invalid-feedback">
                    @foreach ($errors->get('repository') as $error )
                    {{ $error }}
                    @endforeach
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
                <input type="text" class="form-control @if ($errors->get('descrizione')) is-invalid @endif"
                    id="exampleFormControlInput1" name="descrizione">
                @if ($errors->get('descrizione'))
                <div class="invalid-feedback">
                    @foreach ($errors->get('descrizione') as $error )
                    {{ $error }}
                    @endforeach
                </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
                <input type="sumber" class="form-control @if ($errors->get('prezzo')) is-invalid @endif"
                    id="exampleFormControlInput1" name="prezzo">
                @if ($errors->get('prezzo'))
                <div class="invalid-feedback">
                    @foreach ($errors->get('prezzo') as $error )
                    {{ $error }}
                    @endforeach
                </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
</div>
@endsection