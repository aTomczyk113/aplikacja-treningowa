import React, { useState, useEffect } from 'react';
import axios from 'axios';

function ExampleComponent() {
    const [data, setData] = useState(null);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/example');
                setData(response.data);
            } catch (error) {
                console.error('Błąd:', error);
            }
        };

        fetchData();
    }, []);

    return (
        <div>
            <h2>Dane z serwera:</h2>
            {Array.isArray(data) ? (
                <ul>
                    {data.map(item => (
                        <li key={item.id}>{item.name}</li>
                    ))}
                </ul>
            ) : (
                <p>Brak danych do wyświetlenia</p>
            )}

        </div>
    );
}

export default ExampleComponent;
