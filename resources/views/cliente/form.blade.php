@extends('theme.base')

@section('content')
  <div class="container py-5 text-center">
      <h1>Crear cliente</h1>
      <div class="container">
        <form action="{{ route('cliente.store') }}" method="post">
          @csrf
          <div class="mb-3 row">
            <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del cliente">
            </div>
            @error('nombre')
                <p class="form-text text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3 row">
            <label for="cuenta" class="col-sm-4 col-form-label">Cuenta</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="cuenta" id="cuenta" placeholder="Cuenta del cliente" step="0.01">
            </div>
            @error('cuenta')
              <p class="form-text text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3 row">
            <label for="comentario" class=" col-sm-4 col-form-label">Comentarios</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="comentario" id="comentario" rows="3" placeholder="Escribe un comentario"></textarea>
            </div>
            @error('comentario')
              <p class="form-text text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3 row">
            <div class="col-sm-10">
              <button type="submit" class="btn rounded-0 btn-primary btn-block">Guardar Cliente</button>
            </div>
          </div>
        </form>
      </div>
  </div>
@endsection