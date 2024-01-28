// ExerciseSelection.js
import React, { useState, useEffect } from 'react';
import axios from 'axios';
import klatka from '../imgs/klatka.png';
import biceps from '../imgs/biceps.png';
import nogi from '../imgs/nogi.png';
import plecy from '../imgs/plecy.png';

function ExerciseSelection({ onBodyPartSelect }) {
    const [bodyParts, setBodyParts] = useState([]);
    const [selectedBodyPart, setSelectedBodyPart] = useState(null);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/body_parts');
                setBodyParts(response.data);
            } catch (error) {
                console.error('Błąd:', error);
            }
        };

        fetchData();
    }, []);

    const handleBodyPartSelect = (bodyPartId) => {
        setSelectedBodyPart(bodyPartId);
        onBodyPartSelect(bodyPartId);
    };

    return (
        <div className="container exerciseSelection">
            <h1 className="text-center">Wybierz partię ciała którą chcesz</h1>
            <div className="row mt-4 mb-4 exerciseSelectionContainer" >
                {bodyParts.map((bodyPart) => (
                    <div className="col-md-6 mt-4 chooseExerciseBox" key={bodyPart.id}>
                        <button
                            className={`btn btn-primary btn-lg btn-block ${selectedBodyPart === bodyPart.id ? 'active' : ''}`}
                            onClick={() => handleBodyPartSelect(bodyPart.id)}
                        >

                            {bodyPart.name === 'Klatka' && <img src={klatka} alt="Klatka" />}
                            {bodyPart.name === 'Biceps' && <img src={biceps} alt="Biceps" />}
                            {bodyPart.name === 'Plecy' && <img src={plecy} alt="Plecy" />}
                            {bodyPart.name === 'Nogi' && <img src={nogi} alt="Nogi" />}
                          <span>  {bodyPart.name}</span>
                        </button>
                    </div>
                ))}
            </div>
        </div>
    );
}

export default ExerciseSelection;
