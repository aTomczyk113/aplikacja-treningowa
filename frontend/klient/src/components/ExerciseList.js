import React, { useState } from 'react';

function ExerciseList() {
    const [exercises, setExercises] = useState([
        { id: 1, name: 'Ćwiczenie 1', completed: false },
        { id: 2, name: 'Ćwiczenie 2', completed: false },
        { id: 3, name: 'Ćwiczenie 3', completed: false },
        { id: 4, name: 'Ćwiczenie 4', completed: false },
        { id: 5, name: 'Ćwiczenie 5', completed: false },
    ]);

    const [completedCount, setCompletedCount] = useState(0);

    const handleCheckboxChange = (exerciseId) => {
        const updatedExercises = exercises.map((exercise) =>
            exercise.id === exerciseId ? { ...exercise, completed: !exercise.completed } : exercise
        );
        const newCompletedCount = updatedExercises.filter((exercise) => exercise.completed).length;
        setExercises(updatedExercises);
        setCompletedCount(newCompletedCount);
    };

    return (
        <div className="container exerciseList">
            <h1 className="text-center mb-4">Lista Ćwiczeń do Wykonania</h1>
            {exercises.map((exercise) => (
                <div className="form-check mb-2" key={exercise.id}>
                    <input
                        className="form-check-input"
                        type="checkbox"
                        id={`exercise-${exercise.id}`}
                        checked={exercise.completed}
                        onChange={() => handleCheckboxChange(exercise.id)}
                    />
                    <label className="form-check-label ml-2" htmlFor={`exercise-${exercise.id}`}>
                        {exercise.name}
                    </label>
                </div>
            ))}
            <p className="text-center mt-4">
                Wykonane: {completedCount}/{exercises.length}
            </p>
        </div>
    );
}

export default ExerciseList;
