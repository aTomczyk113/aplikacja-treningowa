import React, { useState, useEffect } from 'react';
import axios from 'axios';

function ExerciseSelection({ onBodyPartSelect }) {
    const [bodyParts, setBodyParts] = useState([]);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/body_parts'); // Zmień na rzeczywisty endpoint API
                setBodyParts(response.data);
            } catch (error) {
                console.error('Błąd:', error);
            }
        };

        fetchData();
    }, []);

    return (
        <div className="container exerciseSelection">
            <h1 className="text-center">Wybierz partię ciała którą chcesz</h1>
            <div className="row mt-4 mb-4">
                {bodyParts.map((bodyPart) => (
                    <div className="col-md-12 mt-4" key={bodyPart.id}>
                        <button
                            className="btn btn-primary btn-lg btn-block"
                            onClick={() => onBodyPartSelect(bodyPart.id)}
                        >
                            {bodyPart.name}
                        </button>
                    </div>
                ))}
            </div>
        </div>
    );
}

export default ExerciseSelection;
