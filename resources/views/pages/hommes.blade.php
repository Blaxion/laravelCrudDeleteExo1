@extends('layout.index')
@section('main')

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
                    @if ($membre->genre == 'Homme' AND $loop->iteration < 16)
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
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
