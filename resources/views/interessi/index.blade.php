@extends("layout.app")
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <a class="btn btn-block btn-success" id="btn-interessi-nuovo" href="{!! url('/interessi/create') !!}">Inserisci Nuovo Interesse</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-striped">

            </table>
        </div>
    </div>
@endsection
