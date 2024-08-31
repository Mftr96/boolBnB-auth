@extends('layouts.app')
{{-- da sistemare l'old che non va --}}

@section('content')
    <form method="POST" action="{{ route('apartments.update',$apartment) }}" class="p-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">descrizione appartamento </label>
            <input type="text" class="form-control" name="title" value={{ old('title') ?? $apartment->title}}>
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">camere</label>
            <input type="text" class="form-control" name="rooms" value={{old('rooms') ?? $apartment->rooms}}>
            @error('rooms')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">letti</label>
            <input type="number" class="form-control" name="beds" value={{old('beds') ?? $apartment->beds}}>
            @error('beds')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">bagni </label>
            <input type="number" class="form-control" name="bathrooms" value={{old('bathrooms') ?? $apartment->bathrooms}}>
            @error('bathrooms')
                <div>{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">metratura</label>
            <input type="number" class="form-control" name="dimension_mq" value={{old('dimension_mq') ?? $apartment->dimension_mq}}>
            @error('dimension_mq')
            <div>{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Inserisci Immagine</label>
            <input type="file" class="form-control" name="image" value={{old('image') ?? $apartment->image}}>
            @error('image')
            <div>{{ $message }}</div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="cover_image" class="form-label">Choose file</label>
            <input type="number" class="form-control" name="bathrooms" id="cover_image" placeholder=""
                aria-describedby="coverImageHelper" />
            <div id="coverImageHelper" class="form-text">cover_image</div>
            @error('cover_image')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div> --}}
        <div class="mb-3">
            <label class="form-label">Latitudine</label>
            <input type="text" class="form-control" name="latitude" value={{old('latitude') ?? $apartment->latitude}}>
            @error('latitude')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Longitudine</label>
            <input type="text" class="form-control" name="longitude" value={{old('longitude') ?? $apartment->longitude}}>
            @error('longitude')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Indirizzo </label>
            <input type="text" class="form-control" name="address_full" value={{old('address_full') ?? $apartment->address_full}}>
            @error('address_full')
                <div>{{ $message }}</div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label class="form-label">visibilità appartamento</label>
            <input type="checkbox" class="" value=true name="is_visible" >
            @error('is_visible')
                <div>{{ $message }}</div>
            @enderror
        </div> --}}

        

        <button type="submit" class="btn btn-primary">Inserisci Appartamento </button>
    </form>
    {{-- delete button --}}
   <form action="{{route('apartments.destroy',$apartment)}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">elimina l'appartamento dalla tua lista </button>
   </form>
@endsection
