import React, { useState, useEffect } from 'react';
import axios from 'axios';

function ExerciseList() {
    const [exercises, setExercises] = useState([]);
    const [completedCount, setCompletedCount] = useState(0);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/exercises');
                setExercises(response.data.slice(0, 5)); // Ograniczenie do pięciu ćwiczeń
            } catch (error) {
                console.error('Błąd:', error);
            }
        };

        fetchData();
    }, []);

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
