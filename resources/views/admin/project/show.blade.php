@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <h1>{{$project->nome}}</h1>
        <ul>
            <li>
                <h3>Descrizione</h3>
                <p>{{$project->descrizione}}</p>
            </li>
            <li>
                <h3>Repository</h3>
                <p>{{$project->repository}}</p>
            </li>
            <li>
                <h3>Prezzo</h3>
                <p>{{$project->prezzo}}</p>
            </li>
            <li>
                <h3>Categoria</h3>
                <p>{{$project->type?->title}}</p>
            </li>
        </ul>
    </div>
</div>
@endsection