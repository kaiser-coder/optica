@extends('bo.default')

@section('content')
<div class="container">
    <div class="row m-4 bg-white p-2">
        <div class="col-12">
            <h3 class="text-center mt-4 mb-4 text-secondary">Liste des catégories</h3>
            <div class="table">
                <table class="table table-hover">
                    <thead class="text-center bg-dark text-light">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Description</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if(sizeof($categories) > 0)
                            @foreach ($categories as $category)
                                <tr>
                                    <th>{{ $category->id }}</th>
                                    <th>{{ $category->name }}</th>
                                    <th>{{ $category->description }}</th>
                                </tr>
                            @endforeach
                        @else
                          <tr class="text-center">
                              <th colspan="3">Aucune catégorie disponible pour le moment</th>
                          </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
