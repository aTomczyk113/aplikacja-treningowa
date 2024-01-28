import React from 'react';
import logoImage from "../imgs/logo.svg";

function Login() {
    return (
        <div className="container ">
          <div className="login">

              <img src={logoImage} alt="Logo" className="logo-image" />
              <h2 className="text-center mb-4">Logowanie</h2>
              <form>
                  <div className="form-group mt-4">

                      <input type="email" placeholder="Email" className="form-control" id="email" />
                  </div>
                  <div className="form-group mt-4">

                      <input type="password" placeholder="Hasło" className="form-control" id="password" />
                  </div>
                  <button type="submit" className="btn btn-primary btn-block mt-4">Zaloguj</button>
              </form>
          </div>
        </div>
    );
}

export default Login;
