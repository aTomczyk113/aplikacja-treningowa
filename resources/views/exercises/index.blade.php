<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nazwa</th>
        <th scope="col">Opis</th>
        <th scope="col">Partia mięśniowa</th>
        <th scope="col">Poziom trudności</th>
        <th scope="col">Akcje</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($exercises as $exercise)
        <tr>
            <th scope="row">{{ $exercise->id }}</th>
            <td>{{ $exercise->name }}</td>
            <td>{{ $exercise->description }}</td>
            <td>{{ $exercise->bodyPart->name }}</td>
            <td>{{ $exercise->difficultyLevel->name }}</td>
            <td>
                <a href="{{ route('exercises.editView', $exercise->id) }}" class="btn btn-info">Edytuj</a>

                <form action="{{ route('exercises.destroyView', $exercise->id)}}" method="post" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Usuń</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
