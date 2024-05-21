@extends('layouts.app')

@section('title')
    <title>FILM</title>
@endsection

@section('movies')
    <section id="movie">
        <div class="container">
            <div class="row flex-wrap">
                @foreach ($films as $film)
                <div class="col-3 my-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$film->title}}</h5>
                            <p class="card-text">Nazione: {{$film->nationality}}</p>
                            <p class="card-text">Data: {{$film->date}}</p>
                            <p class="card-text">Voto: {{$film->vote}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <section id="index">
            <div class="container">
                <form action="/">
                    <div class="row">
                        <div class="col text-center">
                            <button>Torna alla Home</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </section>

    </section>
@endsection