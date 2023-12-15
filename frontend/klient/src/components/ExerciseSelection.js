import React from 'react';

function ExerciseSelection() {
    return (
        <div className="container exerciseSelection">
            <h1 className="text-center">Wybierz partię ciała którą chcesz</h1>
            <div className="row mt-4">
                <div className="col-md-12 mt-4">
                    <button className="btn btn-primary btn-lg btn-block">Klatka</button>
                </div>
                <div className="col-md-12 mt-4">
                    <button className="btn btn-primary btn-lg btn-block">Plecy</button>
                </div>
                <div className="col-md-12 mt-4">
                    <button className="btn btn-primary btn-lg btn-block">Nogi</button>
                </div>
            </div>
        </div>
    );
}

export default ExerciseSelection;
