import React from 'react';
import logoImage from "../imgs/logo.svg";

function Login() {
    return (
        <div className="container login">
            <h2 className="text-center mb-4">Logowanie</h2>
            <img src={logoImage} alt="Logo" className="logo-image" />
            <form>
                <div className="form-group mt-4">
                    <label htmlFor="email">Email</label>
                    <input type="email" className="form-control" id="email" />
                </div>
                <div className="form-group mt-4">
                    <label htmlFor="password">Hasło</label>
                    <input type="password" className="form-control" id="password" />
                </div>
                <button type="submit" className="btn btn-primary btn-block mt-4">Zaloguj</button>
            </form>
        </div>
    );
}

export default Login;
