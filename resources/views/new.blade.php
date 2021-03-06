@extends('layouts/candy_index')

@section('main')


  <section id="contact">
      <div class="container">
          <div class="row">
              <div class="col-md-4 margintop-sm">


              </div>
              <div class="col-md-4 margintop-sm">
                <div class="row">
                <form class="row" action="" method="post" enctype="multipart/form-data">
                  @csrf

                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="text" class="form-control" value="" id="title" name="title" placeholder="Titulo">
                          <p></p>
                      </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="price" value="" name="price" placeholder="Precio">
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="stock" name="stock"  value="" placeholder="Stock">
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="size" name="size" placeholder="Peso (Gramos)">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Fecha De Lanzamiento">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <select class="form-control" name="categorie_id" id="categorie_id" placeholder="Categoria">
                                <option value="">Selecciona una Categoria</option>
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <input type="file" class="custom-file-input @error('proavatar') is-invalid @enderror" id="proavatar" name="proavatar">
                          <label class="custom-file-label" for="proavatar">Seleccione una imagen (opcional)</label>
                          <div class="invalid-feedback">@error('proavatar')
                              {{$message}}
                          @enderror</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary full-width" name="button">Registrar Candy</button>
                    </div>
                  </form>
                </div>

              </div>
              <div class="col-md-4 margintop-sm">

              </div>
          </div>
      </div>
  </section>

  @endsection
