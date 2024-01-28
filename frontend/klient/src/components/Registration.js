import React from 'react';
import logoImage from "../imgs/logo.svg";

function Registration() {
    return (
        <div className="container registration">

            <img src={logoImage} alt="Logo" className="logo-image" />
            <h2 className="text-center mb-4">Rejestracja</h2>
            <form>
                <div className="form-group mt-5">
                    <input type="email" placeholder="Email" className="form-control" id="emailRegister" />
                </div>
                <div className="form-group mt-4">
                    <input type="password" placeholder="Hasło" className="form-control" id="passwordRegister" />
                </div>
                <button type="submit" className="btn btn-primary btn-block mt-4">Zarejestruj</button>
            </form>
        </div>
    );
}

export default Registration;
