@extends('bo.default')

@section('content')
<section class="container mt-4">
    <div class="produits">
        <h1 class="text-light text-center">Insertion des nouveaux produits</h1>
        <hr style="border:1px solid #fff;">
        <form action="{{ route('products.store') }}" method="post" class="row">
            @csrf()
            <div class="col-lg-6">
                <div class="mt-2">
                    <label for="ref">Ref</label>
                    <input type="text" name="ref" id="ref" placeholder="Référence" class="form-control">
                    <span class="text-block text-danger">{{ $errors->first('ref') }}</span>
                </div>
                <div class="mt-2">
                    <label for="ref">Nom</label>
                    <input type="text" name="name" id="ref" placeholder="Nom du produit" class="form-control">
                    <span class="text-block text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="mt-2">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
                    <span class="text-block text-danger">{{ $errors->first('description') }}</span>
                </div>
                <div class="mt-2">
                    <label for="prix">Prix</label>
                    <input type="text" name="price" id="prix" placeholder="prix en Ar" class="form-control">
                    <span class="text-block text-danger">{{ $errors->first('price') }}</span>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <label for="">Image</label>
                        <input type="file" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group mt-2">
                    <label for="">Catégorie</label>
                    <select class="form-control" name="category" id="">
                        <option value="">-Aucun-</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <span class="text-block text-danger">{{ $errors->first('category') }}</span>
                </div>
                <div class="form-group mt-2">
                    <label for="">Fabriqué en</label>
                    <select multiple class="form-control form-control-sm" name="made_in" id="">
                        <option value="">-Aucun-</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    <span class="text-block text-danger">{{ $errors->first('made_in') }}</span>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-1">
                        <div class="form-group">
                            <label for="">Marque</label>
                            <select class="form-control" name="benchmark" id="">
                                <option value="">-Aucun-</option>
                                @foreach ($benchmarks as $benchmark)
                                <option value="{{ $benchmark }}">{{ $benchmark }}</option>
                                @endforeach
                            </select>
                            <span class="text-block text-danger">{{ $errors->first('benchmark') }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-1">
                        <div class="form-group">
                            <label for="production_date">Date de production</label>
                            <input type="date" name="production_date" id="production_date" class="form-control">
                            <span class="text-block text-danger">{{ $errors->first('production_date') }}</span>
                        </div>
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="col-6 mt-1">
                        <input type="submit" value="Enregistrer" class="btn btn-info form-control">
                    </div>
                    <div class="col-6 mt-1">
                        <input type="reset" value="Annuler" class="btn btn-danger form-control">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
