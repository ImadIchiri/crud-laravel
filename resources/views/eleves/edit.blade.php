@extends("layout")
@section("title", "Modifier un éleve")
@section("content")
<section class="mx-auto" style="max-width: 1200px">
    <p class="text-center">
        <a href="/">Show All Students</a>
    </p>
    <form action={{url('update', $eleve->id)}} method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="" class="">Nom</label>
            <input type="text" class="form-control" placeholder="Nom.." name="nom" value='{{$eleve->nom}}'>
        </div>
        <div class="form-group">
            <label for="" class="">Age</label>
            <input type="text" class="form-control" placeholder="Age.." name="age" value='{{$eleve->age}}'>
        </div>
        <div class="form-group">
            <label for="" class="">Moyenne</label>
            <input type="text" class="form-control" placeholder="Moyenne.." name="moyenne" value='{{$eleve->moyenne}}'>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</section>
@endsection