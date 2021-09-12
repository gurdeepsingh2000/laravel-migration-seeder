@extends('templates.base')

@section('main')


<div class="cards-container">
    
    @foreach ($allTrips as $element)
    <div class="card-package">
        <div class="card-description">
            <h3>Nome Agenzia</h3>
            <div>{{$element->Agency_Name}}</div>

            <h3>Destinazione</h3>
            <div>{{$element->Destination}}</div>

            <h3>Luogo</h3>
            <div>{{$element->Place}}</div>

            <h3>Prezzo</h3>
            <div>{{$element->Price}}</div>

            <h3>Valutazione</h3>
            <div>{{$element->review}}</div>
            <div class="img-container">
                <img src="{{$element->cover}}" alt="">
            </div>
        </div>
    </div>
    @endforeach
    
</div>

@endsection