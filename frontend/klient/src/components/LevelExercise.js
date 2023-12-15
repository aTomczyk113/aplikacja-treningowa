import React from 'react';

function LevelExercise() {
    return (
        <div className="container levelExercise">
            <h1 className="text-center">Wybierz poziom trudności ćwiczeń</h1>
            <div className="row mt-4">
                <div className="col-md-12 mt-4">
                    <button className="btn btn-primary btn-lg btn-block">Początkujący</button>
                </div>
                <div className="col-md-12 mt-4">
                    <button className="btn btn-primary btn-lg btn-block">Średni</button>
                </div>
                <div className="col-md-12 mt-4">
                    <button className="btn btn-primary btn-lg btn-block">Zaawansowany</button>
                </div>
            </div>
        </div>
    );
}

export default LevelExercise;
