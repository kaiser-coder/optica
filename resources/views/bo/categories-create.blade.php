@extends('bo.default')

@section('content')
<section class="container mt-4">
    <div class="">
        <h1 class="text-light text-center">Ajouter d'une nouvelle catégorie</h1>
        <hr style="border:1px solid #fff;">
        <form action="{{ route('categories.store') }}" method="post" class="row">
            @csrf()
            <div class="col-lg-12">
                <div class="form-group mt-2">
                    <label for="">Nom</label>
                    <input type="text" name="name" class="form-control">
                    <span class="text-block text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group mt-2">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    <span class="text-block text-danger">{{ $errors->first('description') }}</span>
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
