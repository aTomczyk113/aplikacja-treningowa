import React, { useState, useEffect } from "react";
import axios from "axios";

function PanelAdmin() {
    const [exercises, setExercises] = useState([]);
    const [name, setName] = useState("");
    const [description, setDescription] = useState("");
    const [bodyPartId, setBodyPartId] = useState("1");
    const [difficultyLevelId, setDifficultyLevelId] = useState("1");
    const [editId, setEditId] = useState(null);
    const [currentPage, setCurrentPage] = useState(1);
    const exercisesPerPage = 12;

    useEffect(() => {
        fetchExercises();
    }, [currentPage]);

    async function fetchExercises() {
        try {
            const response = await axios.get(`http://localhost:8000/api/exercises?_page=${currentPage}&_limit=${exercisesPerPage}`);
            setExercises(response.data);
        } catch (error) {
            console.error("Error fetching exercises: ", error);
        }
    }

    async function handleFormSubmit(e) {
        e.preventDefault();
        const exerciseData = {
            name,
            description,
            body_part_id: bodyPartId,
            difficulty_level_id: difficultyLevelId,
        };
        try {
            if (editId) {
                await axios.put(`http://localhost:8000/api/exercises/${editId}`, exerciseData);
            } else {
                await axios.post("http://localhost:8000/api/exercises", exerciseData);
            }
            fetchExercises();
            resetForm();
        } catch (error) {
            console.error("Error saving exercise: ", error);
        }
    }

    function resetForm() {
        setName("");
        setDescription("");
        setBodyPartId("1");
        setDifficultyLevelId("1");
        setEditId(null);
    }

    async function deleteExercise(id) {
        try {
            await axios.delete(`http://localhost:8000/api/exercises/${id}`);
            fetchExercises();
        } catch (error) {
            console.error("Error deleting exercise: ", error);
        }
    }


    function startEdit(exercise) {
        setName(exercise.name);
        setDescription(exercise.description);
        setBodyPartId(exercise.body_part_id.toString());
        setDifficultyLevelId(exercise.difficulty_level_id.toString());
        setEditId(exercise.id);
    }

    return (
        <div className="container crud">
            <h2>Panel ćwiczeń</h2>
            <form onSubmit={handleFormSubmit}>
                <div className="mb-3">
                    <label htmlFor="exerciseName" className="form-label">Nazwa ćwiczenia</label>
                    <input type="text" className="form-control" id="exerciseName" value={name} onChange={(e) => setName(e.target.value)} />
                </div>
                <div className="mb-3">
                    <label htmlFor="exerciseDescription" className="form-label">Opis</label>
                    <input type="text" className="form-control" id="exerciseDescription" value={description} onChange={(e) => setDescription(e.target.value)} />
                </div>
                <div className="mb-3">
                    <label htmlFor="bodyPart" className="form-label">Część ciała</label>
                    <select className="form-select" id="bodyPart" value={bodyPartId} onChange={(e) => setBodyPartId(e.target.value)}>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div className="mb-3">
                    <label htmlFor="difficultyLevel" className="form-label">Poziom</label>
                    <select className="form-select" id="difficultyLevel" value={difficultyLevelId} onChange={(e) => setDifficultyLevelId(e.target.value)}>
                        <option value="1">Łatwy</option>
                        <option value="2">Średni</option>
                        <option value="3">Ciężki</option>
                    </select>
                </div>
                <button type="submit" className="btn btncrud btn-primary">{editId ? 'Aktualizuj' : 'Stwórz nowe'} ćwiczenie</button>
            </form>

            <h2 className="mt-4">Lista ćwiczeń</h2>
            <ul className="list-group mt-2">
                {exercises.map((exercise) => (
                    <li key={exercise.id} className="list-group-item">
                        <div><strong>Nazwa: {exercise.name}</strong></div>
                        <div>Opis: {exercise.description}</div>
                        <div><strong>Część ciała: {exercise.body_part_id}</strong></div>
                        <div><strong>Poziom: {exercise.difficulty_level_id}</strong></div>
                        <button type="button" className="btn btn-danger me-2" onClick={() => deleteExercise(exercise.id)}>Usuń</button>
                        <button type="button" className="btn btn-secondary me-2" onClick={() => startEdit(exercise)}>Edytuj</button>
                    </li>
                ))}
            </ul>
        </div>
    );
}

export default PanelAdmin;
