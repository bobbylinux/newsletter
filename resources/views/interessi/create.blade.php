@extends("layout.app")
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="input-interessi-nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="input-interessi-inizio-validita" placeholder="Data Inizio Validità">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="input-interessi-fine-validita" placeholder="Data Fine Validità">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success" id="btn-interessi-salva">Salva</button>
                </div>
            </form>
        </div>
    </div>
@endsection
