import React, { useState, useEffect } from 'react';
import axios from 'axios';

function ExampleComponent() {
    const [data, setData] = useState({
        exercises: [],
        body_parts: [],
        difficulty_levels: [],
        users: [],
        stats: [],
    });

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/all_data');
                setData(response.data);
            } catch (error) {
                console.error('Błąd:', error);
            }
        };

        fetchData();
    }, []);

    const renderJSON = (jsonData) => {
        return <pre>{JSON.stringify(jsonData, null, 2)}</pre>;
    };

    return (
        <div>
            <h2>Ćwiczenia:</h2>
            <ul>
                {data.exercises && data.exercises.map(item => (
                    <li key={item.id}>{item.name}</li>
                ))}
            </ul>

            <h2>Body Parts:</h2>
            <ul>
                {data.body_parts && data.body_parts.map(item => (
                    <li key={item.id}>{item.name}</li>
                ))}
            </ul>

            <h2>Poziomy Trudności:</h2>
            <ul>
                {data.difficulty_levels && data.difficulty_levels.map(item => (
                    <li key={item.id}>{item.name}</li>
                ))}
            </ul>

            <h2>Użytkownicy:</h2>
            <ul>
                {data.users && data.users.map(user => (
                    <li key={user.id}>{user.name}</li>
                ))}
            </ul>

            <h2>Statystyki:</h2>
            <ul>
                {data.stats && data.stats.map(stat => (
                    <li key={stat.user_id}>{`Użytkownik ${stat.user_id}: ${stat.exercise_count} ćwiczeń`}</li>
                ))}
            </ul>

            <h2>JSON Data:</h2>
            {renderJSON(data)}
        </div>
    );
}

export default ExampleComponent;
