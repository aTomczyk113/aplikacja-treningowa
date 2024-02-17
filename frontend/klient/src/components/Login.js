import React from 'react';
import logoImage from "../imgs/logo.svg";
import {useState} from 'react';
import axios from 'axios';
import Registration from "./Registration";
function Login() {
    const [email, setEmail] = useState("");
    const [password,setPassword] = useState("");

    const [name,setName] = useState("nowecwiczenie");
    const [description,setdescription] = useState("opis nowego cwiczniea");
    const [body_part_id,setbody_part_id] = useState("1");
    const [difficulty_level_id,setdifficulty_level_id] = useState("1");

    async function createNewExercise(e){
        e.preventDefault();
        const response = await axios.post('http://localhost:8000/api/createNewExercise',{
            name,
            description,
            body_part_id,
            difficulty_level_id,
        });
    }

    async function  sendData(e){
        e.preventDefault();
        const response = await axios.post('http://localhost:8000/api/login',{
            email,
            password
        });

        const isLogged = response?.data?.user?.id ? true : false;
        const userId = response?.data?.user?.id;
        const userName = response?.data?.user?.name ? response?.data?.user?.name : "";
        localStorage.setItem("isLogged", isLogged);
        localStorage.setItem("userName", userName);
        localStorage.setItem("userId", userId)
        if(isLogged && userName){
            return window.location.href = "http://localhost:3000/?page=home";
        }
    }

    return (
        <div className="container ">
          <div className="login">
              {email}
              {password}
              <img src={logoImage} alt="Logo" className="logo-image" />

             <button onClick={createNewExercise}>Stworz nowe ciwczenie
             </button>


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
