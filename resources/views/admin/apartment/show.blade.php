@extends('layouts.navBar')

@section('content')
    <div class="d-flex align-items-start w-100">

        <div class="d-flex flex-wrap">
            <div id="card-container" class="card col">
                <div class="img-container">
                    @if (Str::startsWith($apartment->image, 'http'))
                        <img width="140" class="card-img-top" src="{{ $apartment->image }}" alt="">
                    @else
                        <img width="140" class="card-img-top" src="{{ asset('storage/' . $apartment->image) }}"
                            alt="">
                    @endif
                </div>
                <div class="card-body">
                    <h2 class="card-title">{{ $apartment->title }}</h2>
                    <p class="card-text">
                    <p><i class="fa-solid fa-person-shelter"></i> Stanze: {{ $apartment->rooms }}</p>
                    <p><i class="fa-solid fa-bed"></i> Letti: {{ $apartment->beds }}</p>
                    <p><i class="fa-solid fa-bath"></i> Bagni: {{ $apartment->bathrooms }}</p>
                    <p><i class="fa-solid fa-maximize"></i> Superficie: {{ $apartment->dimension_mq }}mq</p>
					<p><i class="fa-solid fa-house"></i> Indirizzo: {{$apartment->address_full}}</p>
                    <div class="text-center">
                        <a class="btn btn-primary my-2" href="{{ route('apartments.index') }}">Indietro</a>
                        <a class="btn btn-secondary" href="{{ route('apartments.edit', $apartment->id) }}">Modifica</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection