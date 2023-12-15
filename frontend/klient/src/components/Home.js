import React from 'react';
import heroImg from '../imgs/home.jpg';
import homeImg1 from '../imgs/home2.png';
import homeImg2 from '../imgs/hom3.png';

function Home() {
    return (
        <div className="container homePage">
            <section className="hero-section  pt-5 pb-5 ">
                <div className="row justify-center">
                    <div className="col-md-6">
                        <h1>Dlaczego warto
                            do nas dołączyć?</h1>
                        <p>Nasza siłownia oferuje nie tylko doskonałe wyposażenie,
                            ale także profesjonalne wsparcie. Nasi doświadczeni
                            trenerzy są gotowi doradzić i odpowiedzieć na wszystkie
                            pytania, abyś mógł/mogła trenować z pełnym
                            zaangażowaniem i bezpieczeństwem.</p>
                    </div>
                    <div className="col-md-6">
                        <img src={heroImg} alt="Zdjęcie" className="img-fluid" />
                    </div>
                </div>
            </section>

            <section className="first-section pt-5 pb-5 ">
                <div className="row justify-center">
                    <div className="col-md-4">
                        <img src={homeImg1}alt="Zdjęcie" className="img-fluid" />
                    </div>
                    <div className="col-md-8">
                        <p>Przygotuj się na transformację! Oprócz efektywnych treningów siłowych, oferujemy
                            również porady dotyczące żywienia, suplementacji i ogólnego podejścia do
                            zdrowego stylu życia. Chcemy Cię inspirować, motywować i wspierać na każdym
                            etapie Twojej drogi do osiągnięcia swoich celów.</p>
                    </div>
                </div>
            </section>

            <section className="second-section  pt-5 pb-5 ">
                <div className="row justify-center">
                    <div className="col-md-8">
                        <p>Dołącz do naszej społeczności osób, które pasjonują się zdrowym stylem
                            życia i siłownią! Razem przekraczajmy granice swoich możliwości, budujmy
                            siłę i pewność siebie. Czekamy na Ciebie na naszej stronie głównej,
                            gotowi do treningu i wspólnego osiągania heroicznych rezultatów!</p>
                    </div>
                    <div className="col-md-4">
                        <img src={homeImg2} alt="Zdjęcie" className="img-fluid" />
                    </div>
                </div>
            </section>
        </div>
    );
}

export default Home;
