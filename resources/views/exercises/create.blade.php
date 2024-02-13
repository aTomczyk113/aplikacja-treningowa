<form method="POST" action="{{ url('/exercise/store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>

    <label for="body_part_id">Body Part:</label>
    <select id="body_part_id" name="body_part_id" required>
        @foreach($parts as $part)
            <option value="{{ $part->id }}">{{ $part->name }}</option>
        @endforeach
    </select>

    <label for="difficulty_level_id">Difficulty Level:</label>
    <select id="difficulty_level_id" name="difficulty_level_id" required>
        @foreach($levels as $level)
            <option value="{{ $level->id }}">{{ $level->name }}</option>
        @endforeach
    </select>

    <button type="submit">Submit</button>
</form>
