@extends('website.page.base', ["page" => "home"])

@section('content')
    <h1>Bun venit la Sweet & Chic Delights!</h1>
    <p>Bucurați-vă de o lume plină de dulceață și farmec. Site-ul nostru este dedicat aducerii pentru dvs. a
        deserturilor cu tematică feminină delicioase și adorabile, care sunt la fel de încântătoare pe cât sunt de
        delicioase. Explorați colecția noastră de rețete, sfaturi și o comunitate vibrantă dornică să împărtășească
        bucuria de a găti.</p>
    <div class="row mt-2 g-3 recipes-container">
        @foreach($recipes as $recipe)
            <div class="col-md-4">
                <div class="card">
                    <img alt="{{ $recipe->media->description }}"
                         class="card-img-top"
                         src="{{ $recipe->media->getUrl() }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->title }}</h5>
                        <p class="card-text">{{ $recipe->preview_text }}</p>
                        <a class="btn btn-primary form-control" href="{{ route("website.recipe", ["id" => $recipe->id]) }}">Vezi rețeta</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
