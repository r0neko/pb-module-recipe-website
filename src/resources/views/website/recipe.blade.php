@extends('website.page.base', ["page" => "recipe"])

@section('content')
    @if(!isset($recipe))
        <h1>Oops...</h1>
        <p>Rețeta pe care încercați să o găsiți nu există pe site-ul nostru!<br>Poate v-ar interesa să
            verificați alte rețete ale noastre.</p>
    @else
        <div class="hero-slider rounded mb-3">
            <img alt="{{ $recipe->media->description }}" class="img-fluid" src="{{ $recipe->media->getUrl() }}"/>
            <div class="overlay">
                <div class="container">
                    <h1>{{ $recipe->title }}</h1>
                    <p>{{ $recipe->preview_text }}</p>
                </div>
            </div>
        </div>

        <p>{{ $recipe->description }}</p>

        <h2>Ingrediente:</h2>
        <ul>
            @foreach($recipe->ingredients as $ingredient)
                <li>{{ $ingredient }}</li>
            @endforeach
        </ul>

        <h2>Instrucțiuni:</h2>
        <ol>
            @foreach($recipe->instructions as $instruction)
                <li>{{ $instruction }}</li>
            @endforeach
        </ol>
    @endif
@endsection
