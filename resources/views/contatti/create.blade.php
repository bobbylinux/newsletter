@extends("layout.app")
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <form id="form-contatti">
                <div class="form-group form-input">
                    <input type="text" class="form-control" id="input-contatti-nome" placeholder="Nome">
                </div>
                <div class="form-group form-input">
                    <input type="text" class="form-control" id="input-contatti-cognome" placeholder="Cognome">
                </div>
                @foreach($riferimenti as $riferimento)
                <div class="form-group form-input">
                    <input type="text" class="form-control" id="input-contatti-{!! strtolower($riferimento->descrizione) !!}" placeholder="{!! ucfirst($riferimento->descrizione) !!}">
                </div>
                @endforeach
                <div class="form-group">
                    <div class="btn-group btn-block">
                        <a class="btn btn-block btn-primary dropdown-toggle" data-toggle="dropdown">Aggiungi Campo <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($riferimenti as $riferimento)
                            <li><a href="#" class="btn-contatti-add-field" data-field="{!! strtolower($riferimento->descrizione)  !!}">{!! ucfirst($riferimento->descrizione) !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">Salva</button>
                </div>
            </form>
        </div>
    </div>
@endsection
