import React, { useState, useEffect } from 'react';
import Home from './components/Home';
import Panel from './components/PanelAdmin';
import Top10 from './components/Top10';
import ExerciseSelection from './components/ExerciseSelection';
import LevelExercise from './components/LevelExercise';
import ExerciseList from './components/ExerciseList';
import Header from './components/Header';
import Footer from './components/Footer';
import './styles/main.css';
import Statistics from "./components/Statistics";
import Login from "./components/Login";
import Registration from "./components/Registration";
import ExampleComponent from "./ExampleComponent";

function App() {
    const [selectedBodyPart, setSelectedBodyPart] = useState(null);
    const [selectedLevel, setSelectedLevel] = useState(null);
    const [selectedView, setSelectedView] = useState('home');

    const handleBodyPartSelect = (bodyPartId) => {
        setSelectedBodyPart(bodyPartId);
        setSelectedLevel(null);
        setSelectedView('levelExercise');
    };

    const handleLevelSelect = (levelId) => {
        setSelectedLevel(levelId);
        setSelectedView('exerciseList');
    };

    const handleViewChange = (view) => {
        setSelectedBodyPart(null);
        setSelectedLevel(null);
        setSelectedView(view);
    };

    useEffect(()=>{
        var url_string = window.location.href;
        var url = new URL(url_string);
        var page = url.searchParams.get("page");
        setSelectedView(page)
    },[])


    return (
        <div className="App">
            <Header onViewChange={handleViewChange} />
            {selectedView === 'home' && <Home />}
            {selectedView === 'panel' && <Panel />}
            {selectedView === 'top10' && <Top10 />}
            {selectedView === 'exerciseSelection' && (
                <ExerciseSelection onBodyPartSelect={handleBodyPartSelect} />
            )}
            {selectedView === 'levelExercise' && (
                <LevelExercise onLevelSelect={handleLevelSelect} />
            )}
            {selectedView === 'exerciseList' && (
                <ExerciseList selectedBodyPart={selectedBodyPart} selectedLevel={selectedLevel} />
            )}
            {selectedView === 'statistics' && <Statistics totalTrainings={10} totalExercisesDone={35} />}
            {selectedView === 'login' && <Login />}
            {selectedView === 'registration' && <Registration />}
            <Footer />
            {/*<ExampleComponent/>*/}
        </div>
    );
}

export default App;
