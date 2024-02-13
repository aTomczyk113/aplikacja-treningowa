<form method="POST" action="{{ route('exercises.updateView', $exercise->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Exercise Name:</label>
    <input type="text" id="name" name="name" value="{{ $exercise->name }}">

    <label for="description">Description:</label>
    <textarea name="description" id="description">{{ $exercise->description }}</textarea>

    <label for="body_part_id">Body Part:</label>
    <select name="body_part_id" id="body_part_id">
        @foreach($parts as $part)
            <option value="{{ $part->id }}" {{ $exercise->body_part_id == $part->id ? 'selected' : '' }}>{{ $part->name }}</option>
        @endforeach
    </select>

    <label for="difficulty_level_id">Difficulty Level:</label>
    <select name="difficulty_level_id" id="difficulty_level_id">
        @foreach($levels as $level)
            <option value="{{ $level->id }}" {{ $exercise->difficulty_level_id == $level->id ? 'selected' : '' }}>{{ $level->name }}</option>
        @endforeach
    </select>

    <input type="submit" value="Update Exercise">
</form>
