@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center my-4 text-uppercase">Lista dei progetti</h1>
            <div class="d-grid my-4 col-6 mx-auto">
                <a href="{{route('admin.project.create')}}" class="btn btn-primary">Crea Nuovo Progetto</a>
                
            </div>
             @if (session('message'))
                <div class="alert alert-success my-3 text-center">
                    <h3>{{ session('message') }}</h3>
                </div>
            @endif
            @if (session('messagedelete'))
                <div class="alert alert-danger my-3 text-center">
                    <h3>{{ session('messagedelete') }}</h3>
                </div>
            @endif
            <ul>
                @foreach ($projects as $project )
                    
                    <div class="card w-100 mb-3">
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h5 class="card-title">{{$project->nome}}</h5>
                                <p class="card-text">{{$project->repository}}</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="{{route('admin.project.show', $project)}}" class="btn mx-2 btn-primary">Visualizza</a>
                                <a href="{{route('admin.project.edit', $project)}}" class="btn mx-2 btn-secondary">Modifica</a>
                                <form action="{{route('admin.project.destroy',$project)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
