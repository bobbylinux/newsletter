@extends("layout.blank")
@section('content')
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <form action="{!! url('/contatti') !!}" method="post">
                <div class="form-group">
                    <input type="text" name="nome" value="" placeholder="Nome" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="cognome" value="" placeholder="Cognome" class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" name="mail" value="" placeholder="E-Mail" class="form-control">
                </div>
                <input type="hidden" name="_token" id="_token" value="{!! csrf_token() !!}"/>
                <button type="submit" class="btn btn-default btn-block">Iscriviti</button>
            </form>
        </div>
    </div>

@stop