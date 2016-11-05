@extends("layout.app")
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <a class="btn btn-block btn-success" id="btn-contatti-nuovo" href="{!! url('/contatti/create') !!}">Inserisci Nuovo Contatto</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <table class="table table-striped">

            </table>
        </div>
        <div class="col-xs-6">
            <table class="table table-striped">

            </table>
        </div>
    </div>
@endsection
