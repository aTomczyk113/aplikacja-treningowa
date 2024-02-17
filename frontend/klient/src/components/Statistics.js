import React, { useState, useEffect } from 'react';
import MultipleDatePicker from 'react-multiple-datepicker';
import axios from "axios";

function Statistics({ totalTrainings, totalExercisesDone }) {
    const [selectedDates, setSelectedDates] = useState([]);
    const [doneExercise, setDoneExercise] = useState(0)


    function saveDatesInLocalStorage(dates){
        setSelectedDates(dates);
        const toJson = JSON.stringify(dates)
        localStorage.setItem("dates", toJson);
    }

    async function sendEmail(){
        const userId = localStorage.getItem("userId");
        const response = await axios.post('http://localhost:8000/api/sendEmailWith',{
            userId
        });
    }

    useEffect( ()=>{
        // /get-total-done-excercises
        const datesFromLocalstorage = localStorage.getItem("dates")
        const datesToobj = JSON.parse(datesFromLocalstorage);
        const toDate = [];

        datesToobj.forEach(d=>{
            const newdate = new Date(d)
            toDate.push(newdate)
        })

        if(toDate && toDate.length){
            setSelectedDates(toDate);
        }

        async function gettotal(){
            const userId = localStorage.getItem("userId");
            const response = await axios.post('http://localhost:8000/api/get-total-done-excercises',{
                userId
            });
            const data = response.data;
            console.log(data)
            setDoneExercise(data);
        }
       gettotal();
    },[]);

    return (
        <div className="profilWrap">
            <button onClick={sendEmail}>send email</button>
            <div className="datePicker mt-5">
                <h1 className="text-center">Zaplanuj dni treningu</h1>
                <div className="datePicker">
                    <p>Wybierz daty treningów</p>
                    <MultipleDatePicker
                        onSubmit={dates => {
                            saveDatesInLocalStorage(dates);
                        }}
                    />
                </div>
                <div>
                    {selectedDates.map((date, index) => (
                        <p key={index}>
                                Wybrana data treningu:
                            <span>
                                 {date.toLocaleDateString('pl-PL', {
                                    day: '2-digit',
                                    month: '2-digit',
                                    year: 'numeric'
                                })}
                            </span>
                        </p>
                    ))}
                </div>
            </div>
            <div className="statiscticContainer mb-5">
                <h1 className="text-center">Twoje statystyki</h1>
                <div className="mt-4 statisticContainer">
                    <p className="statisticText">Ilość treningów: <span>{totalTrainings}</span></p>
                    <p className="statisticText">Ilość zrobionych ćwiczeń: <span>{doneExercise}</span></p>
                </div>
            </div>
        </div>
    );
}

export default Statistics;
