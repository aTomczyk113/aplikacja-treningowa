import React, { useState, useEffect } from 'react';
import axios from 'axios';

function LevelExercise({ onLevelSelect }) {
    const [difficultyLevels, setDifficultyLevels] = useState([]);
    const [selectedLevel, setSelectedLevel] = useState(null);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/difficulty_levels');
                setDifficultyLevels(response.data);
            } catch (error) {
                console.error('Błąd:', error);
            }
        };

        fetchData();
    }, []);

    const handleLevelSelect = (levelId) => {
        setSelectedLevel(levelId);
        onLevelSelect(levelId);
    };

    return (
        <div className="container levelExercise">
            <h1 className="text-center">Wybierz poziom trudności ćwiczeń</h1>
            <div className="row mt-4">
                {difficultyLevels.map((level) => (
                    <div className="col-md-12 mt-4" key={level.id}>
                        <button
                            className={`btn btn-primary btn-lg btn-block ${selectedLevel === level.id ? 'active' : ''}`}
                            onClick={() => handleLevelSelect(level.id)}
                        >
                            {level.name}
                        </button>
                    </div>
                ))}
            </div>
        </div>
    );
}

export default LevelExercise;
