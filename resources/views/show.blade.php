@extends('layouts.app')
@section ('titolo', 'studenti')
@section('content')
    <div class="ctn">
        <div class="card-group">
            
            <div class="card">
                <img src="{{ $student['img'] }}" class="card-img-top" alt="{{ $student['nome'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $student['nome'] }}</h5>
                    <h5>Assunt{{ $student['genere'] == 'f' ? 'a' : 'o'}} da {{ $student['azienda'] }}</h5>
                    <p class="card-text">{{ $student['descrizione'] }}</p>
                    <p class="card-text"><small class="text-muted">{{ $student['eta'] }}</small></p>
                </div>
            </div>
        
        </div>
    </div>
@endsection