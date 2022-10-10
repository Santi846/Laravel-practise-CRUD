<!--Extends theme directory-->
@extends('Theme.base')

<!--Selects theme section to extend-->
@section('content')

    <div id="message">

      <h1 id="hello">
        Hola Mundo!
      </h1>

      <a href="{{ route('client.index') }}" class="btn btn-primary">Clientes</a>
    </div>
@endsection