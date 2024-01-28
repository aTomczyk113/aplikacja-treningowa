import React, { useState } from 'react';
import MultipleDatePicker from 'react-multiple-datepicker';

function Statistics({ totalTrainings, totalExercisesDone }) {
    const [selectedDates, setSelectedDates] = useState([]);

    return (
        <div className="profilWrap">
            <div className="datePicker mt-5">
                <h1 className="text-center">Zaplanuj dni treningu</h1>
                <div className="datePicker">
                    <p>Wybierz daty treningów</p>
                    <MultipleDatePicker
                        onSubmit={dates => {
                            setSelectedDates(dates);
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
                    <p className="statisticText">Ilość zrobionych ćwiczeń: <span>{totalExercisesDone}</span></p>
                </div>
            </div>
        </div>
    );
}

export default Statistics;
