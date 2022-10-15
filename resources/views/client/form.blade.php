<!--Extends theme directory-->
@extends('Theme.base')

<!--Selects theme section to extend-->
@section('content')

    <div id="message">

      <h1 id="clients-create">
        Crear Clientes
      </h1>

      <form action="{{ route('client.store') }}" method="POST">
        <!--Token security directive-->
        @csrf

        <div class="mb-3">
          <label for="name">Nombre:</label>
          <br>
          <input type="text" name='name' class="form-control" placeholder="Ingrese el nombre aquí">
        </div>
        @error('name')
          <p class="form-text text-danger">{{$message}}</p> 
        @enderror
        <br>

        <div class="mb-3">
          <label for="due">Saldo:</label>
          <br>
          <input type="number" name='due' class="form-control" placeholder="Ingrese el saldo aquí" step="0.01">
          {{-- step adds decimal pattern --}}
          {{-- <p class="form-text" >Escriba el nombre del cliente</p> --}}
        </div>
        @error('due')
          <p class="form-text text-danger">{{$message}}</p>
        @enderror
        <br>

        <div class="mb-3">
          <label for="description">Descripción:</label>
          <br>
          <textarea name="description"cols="30" rows="4" class="form-control"></textarea>
          {{-- <p class="form-text" >Escriba el nombre del cliente</p> --}}
        </div>
        @error('description')
          <p class="form-text text-danger">{{$message}}</p>
        @enderror
        <br>

        <button type="submit">Guardar Cliente</button>

      </form>

    </div>
@endsection