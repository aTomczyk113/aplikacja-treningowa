import React, { useState, useEffect } from "react";
import axios from "axios";

function Top10() {
    const [topPerformers, setTopPerformers] = useState([]);

    useEffect(() => {
        fetchTopPerformers();
    }, []);

    async function fetchTopPerformers() {
        try {
            const response = await axios.get("http://localhost:8000/api/getTopPerformers");
            setTopPerformers(response.data.topPerformers);
        } catch (error) {
            console.error("Error fetching top performers: ", error);
        }
    }

    return (
        <div>
          <div className="top10">
              <h2>Top 10 Użytkowników</h2>
              <ul >
                  {topPerformers.map(user => (
                      <li key={user.id}>
                          <p>Imię: <span>{user.name}</span></p>
                          <p>Email: <span>{user.email}</span></p>
                          <p>Ukończone ćwiczenia: <span>{user.completed_exercises_count}</span></p>
                      </li>
                  ))}
              </ul>
          </div>
        </div>
    );
}

export default Top10;
