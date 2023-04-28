@extends("layout")
@section("title", "Ajouter un éleve")
@section("content")
<section class="mx-auto" style="max-width: 1200px">
    <p class="text-center">
        <a href="/">Show All Students</a>
    </p>
    <form action="/create" method="post">
        @csrf
        <div class="form-group">
            <label for="" class="">Nom</label>
            <input type="text" class="form-control" placeholder="Nom.." name="nom">
        </div>
        <div class="form-group">
            <label for="" class="">Age</label>
            <input type="text" class="form-control" placeholder="Age.." name="age">
        </div>
        <div class="form-group">
            <label for="" class="">Moyenne</label>
            <input type="text" class="form-control" placeholder="Moyenne.." name="moyenne">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</section>
@endsection