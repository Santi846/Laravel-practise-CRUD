<!--Extends theme directory-->
@extends('Theme.base')

<!--Selects theme section to extend-->
@section('content')

    <div id="message">

      <h1 id="clients-list">
        Listado de Clientes
      </h1>

      <a href="{{ route('client.create') }}" class="btn btn-primary">Crear cliente</a>

      @if (Session::has('message'))
        <div class="alert" alert-info my-5>
          {{Session::get('message')}}
        </div>
      @endif

      <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Saldo</th>
            <th>Descripción</th>
        </thead>
        <tbody>
          {{-- @forelse ($clients as $client)
              
          <tr>
            <td>{{$client->name}}</td>
            <td>{{$client->due}}</td>
            <td>{{$client->description}}</td>
          </tr>
              
          @endforelse --}}
          @foreach ($clients as $client)
            <tr>
              <td>{{$client->name}}</td>
              <td>{{$client->due}}</td>
              <td>{{$client->description}}</td>
            </tr>
          @endforeach 
        </tbody>
        
      </table>

    </div>
@endsection