@extends('bo.default')

@section('content')
<div class="container">
    <div class="row m-4 bg-white p-2">
        <div class="col-12">
            <h3 class="text-center mt-4 mb-4 text-secondary">Liste des produits</h3>
            <div class="table">
                <table class="table table-hover">
                    <thead class="text-center bg-dark text-light">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Réference</th>
                            <th>Description</th>
                            <th>Prix (Ariary)</th>
                            <th>Catégorie</th>
                            <th>Fabriqué en</th>
                            <th>Marque</th>
                            <th>Date de fabrication</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(sizeof($products) > 0)
                            @foreach ($products as $product)
                                <tr>
                                    <th>{{ $product->id }}</th>
                                    <th>{{ $product->name }}</th>
                                    <th>{{ $product->ref }}</th>
                                    <th>{{ $product->description }}</th>
                                    <th>{{ $product->price }}</th>
                                    <th>{{ $product->category }}</th>
                                    <th>{{ $product->made_in }}</th>
                                    <th>{{ $product->benchmark }}</th>
                                    <th>{{ $product->production_date }}</th>
                                </tr>
                            @endforeach
                        @else
                          <tr class="text-center">
                              <th colspan="9">Aucun produit disponible pour le moment</th>
                          </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
