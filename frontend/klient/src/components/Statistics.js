import React from 'react';

function Statistics({ totalTrainings, totalExercisesDone }) {
    return (
        <div className="container">
            <h1 className="text-center">Statystyki</h1>
            <div className="mt-4">
                <p>Ilość treningów: {totalTrainings}</p>
                <p>Ilość zrobionych ćwiczeń: {totalExercisesDone}</p>
            </div>
        </div>
    );
}

export default Statistics;
