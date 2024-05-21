@extends('layouts.app')

@section('title')
    <title>HOME</title>
@endsection

@section('movies')
    <section id="movies">
        <div class="container">
            <form action="movie">
                <div class="row text-center mt-5">
                    <div class="col">
                        <button>GUARDA MOVIE</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection