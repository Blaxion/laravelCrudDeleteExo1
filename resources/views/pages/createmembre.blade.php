@extends('layout.index')
@section('main')
    <div class="container w-25 mt-5 border rounded border-primary bg-info ">
        <form action="/postmembre" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" name='nom' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <select class="form-select" name='genre' aria-label="Default select example">
                    <option selected>Genre</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="number" name='age' class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
