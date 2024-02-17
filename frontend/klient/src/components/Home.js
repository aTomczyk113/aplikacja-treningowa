import React from 'react';
import heroImg from '../imgs/home.jpg';
import homeImg1 from '../imgs/home3.jpg';
import homeImg2 from '../imgs/home2.jpg';

function Home() {

    function checkUserIsLoggedAndShow(){
       const isLogged =  localStorage.getItem("isLogged");
       const userName = localStorage.getItem("userName");

       return isLogged ? (
           <p>Cześć, {userName}!</p>
       ) : "Zaloguj się";
    }

    return (
        <div className="container homePage">
            {checkUserIsLoggedAndShow()}
            <section className="hero-section  pt-5 pb-5 ">
                <div className="row justify-center">
                    <div className="col-md-6">
                        <h1>Dlaczego warto
                            do nas dołączyć?</h1>
                        <p>Nasza siłownia to coś więcej niż miejsce do ćwiczeń; to kompleksowe centrum fitness, które łączy w sobie najnowocześniejsze wyposażenie z profesjonalnym wsparciem. Rozumiemy, że każda osoba ma unikalne potrzeby i cele, dlatego nasi doświadczeni trenerzy personalni są zawsze gotowi dostarczyć indywidualne porady i asystę. Niezależnie od tego, czy dopiero rozpoczynasz swoją przygodę z fitnessem, czy jesteś doświadczonym sportowcem, nasza ekipa jest wyposażona w wiedzę i narzędzia, aby pomóc Ci trenować efektywnie i bezpiecznie. Przy naszym wsparciu każdy trening staje się bardziej owocny, a Ty możesz trenować z pełnym zaangażowaniem, mając pewność, że każdy ruch przyczynia się do osiągania Twoich celów.</p>
                    </div>
                    <div className="col-md-6">
                        <img src={heroImg} alt="Zdjęcie" className="img-fluid" />
                    </div>
                </div>
            </section>

            <section className="first-section pt-5 pb-5 ">
                <div className="row justify-center">
                    <div className="col-md-6">
                        <img src={homeImg1}alt="Zdjęcie" className="img-fluid" />
                    </div>
                    <div className="col-md-6">
                        <p>W naszej siłowni przemiana to nie tylko zmiana wyglądu, ale również postawa wobec życia. Oprócz profesjonalnie zaprojektowanych treningów siłowych, oferujemy kompleksowe doradztwo w zakresie żywienia, suplementacji i ogólnego podejścia do zdrowego stylu życia. Z naszym wsparciem, Twoja podróż do lepszego zdrowia i formy staje się łatwiejsza i bardziej efektywna. Nasz zespół ekspertów pomoże Ci zrozumieć, jak żywienie i właściwe nawyki mogą przyspieszyć osiąganie celów fitness. Niezależnie od tego, czy chcesz schudnąć, zbudować mięśnie, czy po prostu czuć się lepiej, mamy narzędzia i wiedzę, by Cię wspierać. Chcemy być Twoim źródłem inspiracji i motywacji, abyś każdego dnia mógł/mogła podejmować decyzje prowadzące do zdrowszego i szczęśliwszego życia.</p>
                    </div>
                </div>
            </section>

            <section className="second-section  pt-5 pb-5 ">
                <div className="row justify-center">
                    <div className="col-md-6">
                        <p>Jesteśmy nie tylko siłownią - jesteśmy społecznością ludzi, którzy dzielą pasję do zdrowego stylu życia i fitnessu. Dołączając do nas, stajesz się częścią zmotywowanej i wspierającej grupy osób, które, tak jak Ty, dążą do poprawy swojego zdrowia i kondycji. W naszym ośrodku panuje atmosfera pozytywnej energii i wzajemnego wsparcia. Czy to podczas wspólnych treningów, czy w naszym klubowym kąciku relaksu, zawsze znajdziesz kogoś, kto Cię zrozumie i wesprze. Razem możemy przekraczać granice naszych możliwości, budować siłę i pewność siebie. Czekamy na Ciebie na naszej stronie głównej, gotowi do treningu i wspólnego osiągania heroicznych rezultatów w przyjaznej i inspirującej atmosferze.</p>
                    </div>
                    <div className="col-md-6">
                        <img src={homeImg2} alt="Zdjęcie" className="img-fluid" />
                    </div>
                </div>
            </section>
        </div>
    );
}

export default Home;
