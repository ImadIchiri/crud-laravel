@extends("layout")
@section("title", "List des éleves")
@section("content")
<section class="mx-auto" style="max-width: 1200px">
    <p class="text-center">
        <a href="/create">Add Student</a>
    </p>
    @if(session("msg"))
    <h3 class="alert- alert-success">
        {{session("msg")}}
    </h3>
    @endif
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nom</td>
                <td>Age</td>
                <td>Moyenne</td>
                <td>Actions</td>
            </tr>
        <tbody>
            @foreach($eleves as $eleve)
            <tr>
                <td>{{$eleve->id}}</td>
                <td>{{$eleve->nom}}</td>
                <td>{{$eleve->age}}</td>
                <td>{{$eleve->moyenne}}</td>
                <td>
                    <a onclick="return confirm('Are you Crazy !!')" href="{{ url('/delete', $eleve->id) }}">Supprimer</a>
                    <a href="{{ url('/edit', $eleve->id) }}">Modifier</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
</section>

@endsection