@extends("layout.app")
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <form id="form-contatti">
                <div class="form-group">
                    <input type="text" class="form-control" id="input-contatti-nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="input-contatti-cognome" placeholder="Cognome">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="input-contatti-mail" placeholder="E-Mail">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">Salva</button>
                </div>
            </form>
        </div>
    </div>
@endsection
