@extends('layout.index')
@section('main')
    <div class="container text-center mt-5 mb-5 mx-auto">
        <a href="/createmembre"><button class="btn btn-success">CREATE NEW MEMBER</button></a>
    </div>
    <div class="container w-50">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Utilities</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($membres as $membre)
                    <tr>
                        <th scope="row">{{ $membre->id }}</th>
                        <td>{{ $membre->nom }}</td>
                        <td>{{ $membre->age }}</td>
                        <td>{{ $membre->genre }}</td>
                        <td>
                            <form action="/deletemembre/{{$membre->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
