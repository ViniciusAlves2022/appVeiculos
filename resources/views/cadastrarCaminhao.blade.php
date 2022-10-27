@extends('padrao')
@section('content')
<section>
  <div class="container cadastroCaminhao">
    <form class="row g-3" method="post" action="{{route('salvar-banco')}}">
      @csrf
      <div class="col-md-12">
        <label for="inputModelo" class="form-label">Modelo</label>
        <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="inputModelo" placeholder="Fusca">
        @error('modelo')
        <div class="text-sm-start text-light">*Preencher o campo modelo.</div>
        @enderror
      </div>

      <div class="col-12">
        <label for="inputMarca" class="form-label">Marca</label>
        <input type="text" name="marca" class="form-control" id="inputMarca" placeholder="BMW">
        @error('marca')
        <div class="text-sm-start text-light">*Preencher o campo marca.</div>
        @enderror
      </div>
      <div class="col-12">
        <label for="inputAno" class="form-label">Ano</label>
        <input type="text" name="ano" class="form-control" id="inputAno" placeholder="2000">
        @error('ano')
        <div class="text-sm-start text-light">*Preencher o campo ano.</div>
        @enderror
      </div>
      <div class="col-md-12">
        <label for="inputCor" class="form-label">Cor</label>
        <input type="text" name="cor" class="form-control" id="inputCor" placeholder="Preto">
        @error('cor')
        <div class="text-sm-start text-light">*Preencher o campo cor.</div>
        @enderror
      </div>

      <div class="col-md-12">
        <label for="inputZip" class="form-label">Valor</label>
        <input type="text" name="valor" class="form-control" id="inputZip" placeholder="25.660,23">
        @error('valor')
        <div class="text-sm-start text-light">*Preencher o campo valor.</div>
        @enderror
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </form>
  </div>
</section>
@endsection