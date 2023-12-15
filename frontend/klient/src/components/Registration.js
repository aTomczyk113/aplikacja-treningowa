import React from 'react';
import logoImage from "../imgs/logo.svg";

function Registration() {
    return (
        <div className="container registration">
            <h2 className="text-center mb-4">Rejestracja</h2>
            <img src={logoImage} alt="Logo" className="logo-image" />
            <form>
                <div className="form-group mt-5">
                    <label htmlFor="emailRegister">Email</label>
                    <input type="email" className="form-control" id="emailRegister" />
                </div>
                <div className="form-group mt-4">
                    <label htmlFor="passwordRegister">Hasło</label>
                    <input type="password" className="form-control" id="passwordRegister" />
                </div>
                <button type="submit" className="btn btn-primary btn-block mt-4">Zarejestruj</button>
            </form>
        </div>
    );
}

export default Registration;
