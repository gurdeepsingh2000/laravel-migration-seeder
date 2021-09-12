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

<br>


<h2 class="cheap-packages">Pacchetti Viaggi sotto i 90€</h2>


<div class="cheap-cards-container">
        @foreach($filteredTrips as $cheapTrips)
            <div class="card-package">
                <div class="card-description">
                    <h3>Nome Agenzia</h3>
                    <div>{{$cheapTrips->Agency_Name}}</div>

                    <h3>Destinazione</h3>
                    <div>{{$cheapTrips->Destination}}</div>

                    <h3>Luogo</h3>
                    <div>{{$cheapTrips->Place}}</div>

                    <h3>Prezzo</h3>
                    <div>{{$cheapTrips->Price}}</div>

                    <h3>Valutazione</h3>
                    <div>{{$cheapTrips->review}}</div>
                    <div class="img-container">
                        <img src="{{$cheapTrips->cover}}" alt="">
                    </div>
                </div>
            </div>
        @endforeach
</div>



<h2 class="best-packages">I migliori Pacchetti</h2>


<div class="best-cards-container">
        @foreach($bestTrips as $mostRated)
            <div class="card-package">
                <div class="card-description">
                    <h3>Nome Agenzia</h3>
                    <div>{{$mostRated->Agency_Name}}</div>

                    <h3>Destinazione</h3>
                    <div>{{$mostRated->Destination}}</div>

                    <h3>Luogo</h3>
                    <div>{{$mostRated->Place}}</div>

                    <h3>Prezzo</h3>
                    <div>{{$mostRated->Price}}</div>

                    <h3>Valutazione</h3>
                    <div>{{$mostRated->review}}</div>
                    <div class="img-container">
                        <img src="{{$mostRated->cover}}" alt="">
                    </div>
                </div>
            </div>
        @endforeach
</div>

@endsection