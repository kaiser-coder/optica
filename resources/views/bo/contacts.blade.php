@extends('bo.default')

@section('content')
<div class="container">
    <div class="row m-4 bg-white p-2">
        <div class="col-12">
            <h3 class="text-center mt-4 mb-4 text-secondary">Liste Message Contacts</h3>
            <div class="table">
                <table class="table table-hover">
                    <thead class="text-center bg-dark text-light">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Adresse Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <th>{{ $contact->id }}</th>
                                <th>{{ $contact->name }}</th>
                                <th>{{ $contact->email }}</th>
                                <th>{{ $contact->message }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
