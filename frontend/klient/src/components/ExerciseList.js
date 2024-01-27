import React, { useState, useEffect } from 'react';
import axios from 'axios';
import '../styles/main.css';
import xImg from '../imgs/x.svg';
import homeImg1 from "../imgs/home2.jpg";


function ExerciseList({ selectedBodyPart, selectedLevel }) {
    const [exercises, setExercises] = useState([]);
    const [completedCount, setCompletedCount] = useState(0);
    const [showCongratsPopup, setShowCongratsPopup] = useState(false);
    const [additionalExercises, setAdditionalExercises] = useState([]);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/exercises');
                const filteredExercises = response.data.filter(
                    (exercise) =>
                        exercise.body_part_id === selectedBodyPart && exercise.difficulty_level_id === selectedLevel
                );
                setExercises(filteredExercises.slice(0, 8));
            } catch (error) {
                console.error('Błąd:', error);
            }
        };

        fetchData();
    }, [selectedBodyPart, selectedLevel]);

    useEffect(() => {
        // Wybierz 2 dodatkowe ćwiczenia z tej samej partii i poziomu zaawansowania
        const fetchAdditionalExercises = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/exercises');
                const filteredExercises = response.data.filter(
                    (exercise) =>
                        exercise.body_part_id === selectedBodyPart &&
                        exercise.difficulty_level_id === selectedLevel &&
                        !exercises.includes(exercise)
                );
                setAdditionalExercises(filteredExercises.slice(0, 2));
            } catch (error) {
                console.error('Błąd:', error);
            }
        };

        fetchAdditionalExercises();
    }, [selectedBodyPart, selectedLevel, exercises]);

    const handleCheckboxChange = (exerciseId) => {
        const updatedExercises = exercises.map((exercise) =>
            exercise.id === exerciseId ? { ...exercise, completed: !exercise.completed } : exercise
        );
        const newCompletedCount = updatedExercises.filter((exercise) => exercise.completed).length;
        setExercises(updatedExercises);
        setCompletedCount(newCompletedCount);

        // Sprawdzamy, czy wszystkie ćwiczenia zostały wykonane
        if (newCompletedCount === exercises.length) {
            setShowCongratsPopup(true);
        }
    };

    const handleMouseEnter = (exerciseId) => {
        const tooltip = document.getElementById(`tooltip-${exerciseId}`);
        tooltip.style.visibility = 'visible';
    };

    const handleMouseLeave = (exerciseId) => {
        const tooltip = document.getElementById(`tooltip-${exerciseId}`);
        tooltip.style.visibility = 'hidden';
    };

    const closeCongratsPopup = () => {
        setShowCongratsPopup(false);
    };

    return (
        <div className="container exerciseList">
            <h1 className="text-center mb-4">Lista Ćwiczeń do Wykonania</h1>
          <div className="exercisesContainer">
              {exercises.map((exercise) => (
                  <div
                      className="form-check mb-2"
                      key={exercise.id}
                      onMouseEnter={() => handleMouseEnter(exercise.id)}
                      onMouseLeave={() => handleMouseLeave(exercise.id)}
                  >
                      <input
                          className="form-check-input"
                          type="checkbox"
                          id={`exercise-${exercise.id}`}
                          checked={exercise.completed}
                          onChange={() => handleCheckboxChange(exercise.id)}
                      />
                      <label className="form-check-label ml-2" htmlFor={`exercise-${exercise.id}`}>
                          <span className="exercise_label">{exercise.name}</span>
                          <span id={`tooltip-${exercise.id}`} className="tooltip">
                            {exercise.description}
                        </span>
                      </label>
                  </div>
              ))}
          </div>
            <p className="text-center mt-4">
                Wykonane: {completedCount}/{exercises.length}
            </p>
            {showCongratsPopup && (
                <div className="congrats-popup">
                    <p>Gratulacje, Rambo! Wykonałeś wszystkie zadania!</p>
                    <p>Dodatkowe Ćwiczenia:</p>
                    {additionalExercises.map((exercise) => (
                        <div key={`additional-${exercise.id}`}>
                            <label className="form-check-label">
                                <input type="checkbox" onChange={() => console.log('Zaznaczone dodatkowe ćwiczenie')} />
                                <span className="exercise_label">{exercise.name}</span>
                                <span id={`tooltip-additional-${exercise.id}`} className="tooltip">
                                    {exercise.description}
                                </span>
                            </label>
                        </div>
                    ))}
                    <button onClick={closeCongratsPopup}>   <img src={xImg}alt="Zdjęcie" className="img-fluid" /></button>
                </div>
            )}
        </div>
    );
}

export default ExerciseList;
