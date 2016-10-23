@extends("layout.app")
@section('content')
    <div class="row">
      <div class="col-xs-12">
        <form>
          <div class="form-group">
            <input type="email" class="form-control" id="oggetto-input" placeholder="Oggetto">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="20" id="messaggio-input" placeholder="Scrivi qualcosa"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-block btn-success">Invia</button>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-block btn-warning">Simula</button>
          </div>
        </form>
      </div>
    </div>
@endsection
