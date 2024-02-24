import React from 'react';
import logoImage from "../imgs/logo.svg";
import {useState} from 'react';
import axios from 'axios';
import Registration from "./Registration";
function Login() {
    const [email, setEmail] = useState("");
    const [password,setPassword] = useState("");



    async function sendData(e) {
        e.preventDefault();
        try {
            const response = await axios.post('http://localhost:8000/api/login', {
                email,
                password
            });

            const isLogged = response?.data?.user?.id ? true : false;
            const userId = response?.data?.user?.id;
            const userName = response?.data?.user?.name ? response?.data?.user?.name : "";
            localStorage.setItem("isLogged", isLogged);
            localStorage.setItem("userName", userName);
            localStorage.setItem("userId", userId);

            if (userName === "bartek") {
                localStorage.setItem("userRole", "admin");
            } else {
                localStorage.setItem("userRole", "client");
            }

            if (isLogged && userName) {
                return window.location.href = "http://localhost:3000/?page=home";
            }
        } catch (error) {
            // Obsługa błędu
            console.error("Błąd logowania:", error.response.data.message);
            alert("Nieprawidłowe dane logowania. Spróbuj ponownie.");
        }
    }


    return (
        <div className="container ">
          <div className="login">

              <img src={logoImage} alt="Logo" className="logo-image" />




              <h2 className="text-center mb-4">Logowanie</h2>
              <form>
                  <div className="form-group mt-4">

                      <input type="email"  onChange={e=>setEmail(e.target.value)} placeholder="Email" className="form-control" id="email" />
                  </div>
                  <div className="form-group mt-4">

                      <input type="password" onChange={e=>setPassword(e.target.value)} placeholder="Hasło" className="form-control" id="password" />
                  </div>
                  <button onClick={sendData} type="submit" className="btn btn-primary btn-block mt-4">Zaloguj</button>
              </form>
          </div>
            <Registration/>
        </div>
    );
}

export default Login;
