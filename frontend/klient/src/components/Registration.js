import React, { useState } from 'react';
import axios from 'axios';
import logoImage from "../imgs/logo.svg";

function Registration() {
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");

    const handleRegistration = async (e) => {
        e.preventDefault();
        try {
            const response = await axios.post('http://localhost:8000/api/register', {
                name,
                email,
                password
            });
            alert("Rejestracja zakończona sukcesem. Możesz się teraz zalogować.");
        } catch (error) {
            if (error.response && error.response.status === 422) {
                alert(error.response.data.message); // Detailed validation error
            } else {
                alert("Wystąpił błąd podczas rejestracji. Proszę spróbować ponownie.");
            }
        }
    };

    return (
        <div className="container registration">
            <img src={logoImage} alt="Logo" className="logo-image" />
            <h2 className="text-center mb-4">Rejestracja</h2>
            <form onSubmit={handleRegistration}>
                <div className="form-group mt-5">
                    <input type="text" placeholder="Nazwa użytkownika" className="form-control" value={name} onChange={(e) => setName(e.target.value)} />
                </div>
                <div className="form-group mt-4">
                    <input type="email" placeholder="Email" className="form-control" value={email} onChange={(e) => setEmail(e.target.value)} />
                </div>
                <div className="form-group mt-4">
                    <input type="password" placeholder="Hasło" className="form-control" value={password} onChange={(e) => setPassword(e.target.value)} />
                </div>
                <button type="submit" className="btn btn-primary btn-block mt-4">Zarejestruj</button>
            </form>
        </div>
    );
}

export default Registration;
