<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;
use App\Models\BodyPart;
use App\Models\DifficultyLevel;

class ExerciseSeeder extends Seeder
{
    public function run()
    {

        $this->createExercisesForBodyPart('Klatka', 'Łatwy', [
            'Pompki' => 'Podstawowe ćwiczenie angażujące mięśnie klatki piersiowej, tricepsa i przednich deltoidów. Wykonuj je w równomiernym tempie.',
            'Wyciskanie na ławce płaskiej' => 'Ćwiczenie izolujące mięśnie klatki piersiowej. Dbaj o kontrolowany ruch sztangi w górę i w dół.',
            'Pompki na poręczach' => 'Wariacja pompki, która skupia się na pracy tricepsów. Utrzymuj stabilność ciała podczas wykonywania ćwiczenia.',
            'Wyciskanie na maszynie' => 'Bezpieczna alternatywa dla tradycyjnego wyciskania. Dostosuj ustawienia maszyny do swoich preferencji.',
            'Pompki z unoszeniem rąk' => 'Pompki z jednoczesnym unoszeniem rąk. Angażuje dodatkowo mięśnie przednich deltoidów.',
            'Wyciskanie sztangi leżąc na ławce płaskiej' => 'Podstawowe ćwiczenie siłowe na klatkę piersiową. Użyj odpowiedniego obciążenia.',
            'Pompki z trudniejszym chwytem' => 'Wariant pompki z bardziej zaawansowanym chwytem, angażujący różne obszary klatki piersiowej.',
            'Wyciskanie na maszynie Hammer Strength' => 'Izolacyjne ćwiczenie na maszynie, pomagające w skoncentrowanym treningu klatki piersiowej.',
            'Pompki z podnoszeniem nóg' => 'Pompki z uniesionymi nogami, skupiające się na dodatkowym obciążeniu dla mięśni klatki piersiowej.',
            'Wyciskanie sztangi leżąc na ławce skośnej' => 'Wariacja wyciskania na ławce skośnej, akcentująca górną część klatki piersiowej.',
        ]);

        $this->createExercisesForBodyPart('Klatka', 'Średni', [
            'Wyciskanie sztangi na skosie' => 'Izolacyjne ćwiczenie na górną część klatki piersiowej. Ustaw ławkę pod kątem dla najlepszych efektów.',
            'Pompki na Bosu Ball' => 'Pompki wykonywane na niestabilnej powierzchni, angażujące dodatkowe mięśnie stabilizujące.',
            'Wyciskanie sztangi leżąc na ławce skośnej' => 'Wariacja wyciskania na ławce skośnej, angażująca różne obszary klatki piersiowej.',
            'Pompki z rotacją tułowia' => 'Pompki z dodatkowym skrętem tułowia, doskonałe dla rozwijania stabilności i siły mięśniowej.',
            'Wyciskanie sztangi na maszynie Smitha' => 'Izolacyjne ćwiczenie na maszynie, pozwalające na precyzyjne ustawienie ruchu.',
            'Pompki z nadgarstkami' => 'Pompki z dodatkowym obciążeniem na nadgarstkach, rozwijające siłę i stabilność.',
            'Wyciskanie sztangi na maszynie Hammer Strength' => 'Izolacyjne ćwiczenie na maszynie, angażujące mięśnie klatki piersiowej.',
            'Pompki na piłce lekarskiej' => 'Pompki z nogami opartymi na piłce lekarskiej, doskonałe dla rozwijania stabilności i koordynacji ruchowej.',
            'Wyciskanie sztangi na maszynie Cable Crossover' => 'Izolacyjne ćwiczenie na maszynie, pozwalające na skoncentrowane uderzenia w mięśnie klatki piersiowej.',
            'Pompek z unoszeniem jednej ręki' => 'Zaawansowana wersja pompek z unoszeniem jednej ręki, angażująca asymetrycznie mięśnie klatki piersiowej.',
        ]);

        $this->createExercisesForBodyPart('Klatka', 'Zaawansowany', [
            'Pompki na jednej ręce' => 'Ekstremalnie zaawansowana wersja pompki, angażująca intensywnie mięśnie klatki piersiowej i ramion.',
            'Wyciskanie hantli na ławce płaskiej' => 'Izolacyjne ćwiczenie na siłę, rozwijające symetryczne mięśnie klatki piersiowej.',
            'Pompki na pięściami' => 'Pompki, wykonane z dłońmi zamkniętymi w pięści, angażujące inaczej mięśnie klatki piersiowej.',
            'Wyciskanie hantli na ławce skośnej' => 'Izolacyjne ćwiczenie na górną część klatki piersiowej, wymagające precyzyjnej kontroli ruchu.',
            'Pompki z obciążeniem' => 'Pompki z dodatkowym obciążeniem, doskonałe dla zaawansowanych adeptów treningu klatki piersiowej.',
            'Wyciskanie hantli na maszynie Hammer Strength' => 'Izolacyjne ćwiczenie na maszynie, pozwalające na precyzyjne ustawienie ruchu.',
            'Pompek na trx' => 'Zaawansowana wersja pompki wykonywana przy użyciu TRX, rozwijająca stabilność i siłę mięśniową.',
            'Wyciskanie hantli na maszynie Smitha' => 'Izolacyjne ćwiczenie na maszynie, angażujące intensywnie mięśnie klatki piersiowej.',
            'Pompki na Bosu Ball z jedną ręką' => 'Bardzo zaawansowana wersja pompki wykonywana na niestabilnej powierzchni z jedną ręką.',
            'Wyciskanie hantli na maszynie Cable Crossover' => 'Izolacyjne ćwiczenie na maszynie, pozwalające na skoncentrowane uderzenia w mięśnie klatki piersiowej.',
        ]);

        $this->createExercisesForBodyPart('Plecy', 'Łatwy', [
            'Podciąganie na drążku szerokim chwytem' => 'Podstawowe ćwiczenie na plecy, angażujące górne partie mięśni grzbietu. Wykonuj pełne ruchy.',
            'Wiosłowanie sztangą' => 'Izolacyjne ćwiczenie dla mięśni grzbietu. Unikaj nadmiernego kiwania ciała podczas wiosłowania.',
            'Wiosłowanie hantlą' => 'Wariant wiosłowania angażujący mięśnie grzbietu i dolnej części pleców. Utrzymuj stabilność tułowia.',
            'Podciąganie na drążku podchwytem' => 'Podciąganie z podchwytem, skupiające się na pracy dolnych partii mięśni grzbietu.',
            'Wiosłowanie sztangą w opadzie tułowia' => 'Izolacyjne wiosłowanie dla dolnej części pleców. Utrzymuj płaski plecy podczas ćwiczenia.',
            'Podciąganie na drążku podchwytem z obciążeniem' => 'Zaawansowane podciąganie z dodatkowym obciążeniem, rozwijające siłę mięśni grzbietu.',
            'Wiosłowanie sztangą podchwytem' => 'Wariant wiosłowania angażujący dolne partie mięśni grzbietu. Kontroluj ruchy sztangi.',
            'Podciąganie na drążku szerokim chwytem z nachwytem' => 'Podciąganie z nachwytem, skupiające się na pracy górnych partii mięśni grzbietu.',
            'Wiosłowanie hantlą w opadzie tułowia' => 'Izolacyjne ćwiczenie dla dolnych partii mięśni grzbietu. Wykonuj ruchy kontrolowane.',
            'Podciąganie na drążku szerokim chwytem z obciążeniem' => 'Zaawansowane podciąganie z dodatkowym obciążeniem, rozwijające siłę górnych partii mięśni grzbietu.',
        ]);

        $this->createExercisesForBodyPart('Plecy', 'Średni', [
            'Martwy ciąg' => 'Podstawowe ćwiczenie na plecy, angażujące mięśnie dolnej i środkowej partii pleców. Utrzymuj płaski kręgosłup.',
            'Wiosłowanie sztangielkami' => 'Izolacyjne ćwiczenie dla mięśni grzbietu, umożliwiające oddzielne pracowanie każdej strony pleców.',
            'Podciąganie na drążku podchwytem z nachwytem' => 'Podciąganie z nachwytem i podchwytem, rozwijające zarówno górne, jak i dolne partie mięśni grzbietu.',
            'Martwy ciąg sumo' => 'Wariant martwego ciągu z szerokim rozstawem nóg, skupiający się na mięśniach pośladkowych i dolnej części pleców.',
            'Wiosłowanie sztangą nachwytem' => 'Izolacyjne ćwiczenie angażujące górne partie mięśni grzbietu. Utrzymuj kontrolowany ruch.',
            'Podciąganie na drążku szerokim chwytem z obciążeniem' => 'Podciąganie z dodatkowym obciążeniem, intensywnie rozwijające górne partie mięśni grzbietu.',
            'Martwy ciąg rumuński' => 'Wariant martwego ciągu skupiający się na mięśniach pośladkowych i dolnej części pleców. Utrzymuj lekko uniesione łopatki.',
            'Wiosłowanie hantlą jednorącz' => 'Izolacyjne wiosłowanie dla jednej strony mięśni grzbietu. Dbaj o stabilność tułowia.',
            'Podciąganie na drążku podchwytem z obciążeniem' => 'Zaawansowane podciąganie z dodatkowym obciążeniem, intensywnie rozwijające dolne partie mięśni grzbietu.',
            'Wiosłowanie sztangą nachwytem z supinacją' => 'Wariant wiosłowania z supinacją nadgarstków, angażujący górne partie mięśni grzbietu.',
        ]);

        $this->createExercisesForBodyPart('Plecy', 'Zaawansowany', [
            'Pompki na poręczach z unoszeniem nóg' => 'Ekstremalnie zaawansowana wersja pompki, angażująca dodatkowo mięśnie brzucha i dolnej partii pleców.',
            'Pull-upy (podciąganie) z unoszeniem nóg' => 'Zaawansowane podciąganie z dodatkowym unoszeniem nóg, rozwijające siłę i koordynację ruchową.',
            'Wiosłowanie sztangą w opadzie tułowia z obciążeniem' => 'Izolacyjne wiosłowanie z ciężarem, intensywnie rozwijające dolną część pleców.',
            'Wyciskanie sztangi leżąc na ławce płaskiej' => 'Podstawowe ćwiczenie na klatkę piersiową, angażujące jednocześnie mięśnie pleców. Utrzymuj stabilność tułowia.',
            'Wiosłowanie hantlą jednorącz z supinacją' => 'Izolacyjne wiosłowanie z jednoczesną supinacją nadgarstków, skupiające się na mięśniach grzbietu.',
            'Pompki na trx' => 'Zaawansowana wersja pompki wykonywana przy użyciu TRX, angażująca mięśnie stabilizujące korpus.',
            'Pull-upy z obciążeniem' => 'Zaawansowane podciąganie z dodatkowym obciążeniem, rozwijające siłę mięśni pleców.',
            'Wiosłowanie hantlą w opadzie tułowia z obciążeniem' => 'Izolacyjne wiosłowanie z ciężarem, intensywnie rozwijające dolną część pleców.',
            'Pompki na Bosu Ball' => 'Zaawansowana wersja pompki wykonywana na niestabilnej powierzchni, angażująca dodatkowo mięśnie stabilizujące.',
            'Wiosłowanie sztangą podchwytem z obciążeniem' => 'Zaawansowane wiosłowanie z dodatkowym obciążeniem, rozwijające mięśnie grzbietu.',
        ]);

        $this->createExercisesForBodyPart('Nogi', 'Łatwy', [
            'Przysiady' => 'Podstawowe ćwiczenie na nogi, angażujące głównie mięśnie czworogłowe uda. Zachowuj prawidłową postawę ciała.',
            'Wykroki' => 'Ćwiczenie wzmacniające mięśnie nóg i pośladków. Kontroluj ruchy i utrzymuj równowagę.',
            'Wspięcia na palce stojąc' => 'Ćwiczenie izolujące mięśnie łydek. Podnoś się na palce, unikając nadmiernego przechylenia tułowia.',
            'Prostowanie nóg w siadzie' => 'Izolacyjne ćwiczenie na mięśnie czworogłowe uda. Utrzymuj płaski kręgosłup.',
            'Deski' => 'Ćwiczenie wzmacniające mięśnie korpusu. Utrzymuj prostą linię od głowy do pięt.',
            'Unoszenie nóg w leżeniu na plecach' => 'Izolacyjne ćwiczenie na mięśnie brzucha. Unosź nogi, kontrolując ruchy.',
            'Lunges' => 'Wariant wykroków, angażujący mięśnie nóg i pośladków. Utrzymuj stabilność i równowagę.',
            'Skłony boczne' => 'Ćwiczenie izolujące mięśnie boczne brzucha. Skłaniaj się bokiem, napinając mięśnie.',
            'Skakanie przez sznur' => 'Ćwiczenie kardio, wzmacniające nogi. Skacz przez skakankę utrzymując rytm.',
            'Wykopy w leżeniu na boku' => 'Izolacyjne ćwiczenie na boczne partie pośladków. Wykonuj kontrolowane wykopy.',
        ]);

        $this->createExercisesForBodyPart('Nogi', 'Średni', [
            'Przysiady ze sztangą' => 'Podstawowe ćwiczenie na nogi z dodatkowym obciążeniem. Utrzymuj stabilność i kontroluj ruchy.',
            'Wykroki na miejscu z hantlami' => 'Ćwiczenie wzmacniające mięśnie nóg i pośladków z dodatkowym obciążeniem. Kontroluj ruchy.',
            'Wspięcia na palce siedząc' => 'Izolacyjne ćwiczenie na mięśnie łydek przy użyciu maszyny. Kontroluj ruchy.',
            'Prostowanie nóg w leżeniu' => 'Izolacyjne ćwiczenie na mięśnie czworogłowe uda. Utrzymuj stabilność kręgosłupa.',
            'Deski boczne z unoszeniem nogi' => 'Wariant desek, angażujący dodatkowo mięśnie boczne brzucha i pośladków. Utrzymuj równowagę.',
            'Unoszenie nóg w leżeniu na brzuchu' => 'Izolacyjne ćwiczenie na mięśnie dolnej partii pleców. Unosź nogi, utrzymując napięcie.',
            'Lunges z wyskokiem' => 'Dynamiczne ćwiczenie wykroków z dodatkowym wyskokiem. Utrzymuj kontrolę nad ruchami.',
            'Skłony w przód z hantlami' => 'Ćwiczenie wzmacniające mięśnie pleców, nóg i pośladków. Utrzymuj stabilność i kontroluj ruchy.',
            'Skakanie na skakance z podwójnym obrotem' => 'Zaawansowane ćwiczenie kardio z podwójnym obrotem skakanki. Kontroluj tempo i ruchy.',
            'Wykopy w leżeniu na boku z obciążeniem' => 'Izolacyjne ćwiczenie na boczne partie pośladków z dodatkowym obciążeniem. Kontroluj ruchy.',
        ]);

        $this->createExercisesForBodyPart('Nogi', 'Zaawansowany', [
            'Przysiady bulgarskie' => 'Zaawansowane ćwiczenie na mięśnie nóg, wymagające stabilności i kontroli ruchu.',
            'Wykroki na skosie z hantlami' => 'Izolacyjne ćwiczenie na mięśnie nóg i pośladków z dodatkowym obciążeniem.',
            'Wspięcia na palce siedząc na maszynie' => 'Wzmacnianie mięśni łydek przy użyciu maszyny. Ustaw odpowiednią wagę i kontroluj ruch.',
            'Prostowanie nóg w leżeniu na maszynie' => 'Izolacyjne ćwiczenie na mięśnie przednie ud. Używaj maszyny do prostowania nóg.',
            'Deski boczne z unoszeniem nogi i obciążeniem' => 'Zaawansowane ćwiczenie wzmacniające boczne mięśnie tułowia i nogi. Dodaj obciążenie dla intensywności.',
            'Unoszenie nóg w leżeniu na brzuchu z obciążeniem' => 'Izolacyjne ćwiczenie na mięśnie dolnej części brzucha. Unosź nogi z dodatkowym obciążeniem.',
            'Lunges skośne' => 'Dynamiczne ćwiczenie na mięśnie nóg i pośladków, wykonuj lunges w skosie dla różnorodności.',
            'Skłony w przód z hantlami na Bosu Ball' => 'Wzmacnianie mięśni nóg i pośladków z użyciem Bosu Ball dla dodatkowej stabilizacji.',
            'Skakanie przez przeszkody' => 'Zaawansowane kardioćwiczenie z przeskakiwaniem przeszkód. Utrzymuj szybkie tempo.',
            'Wykopy w leżeniu na boku z nogą podniesioną na skos' => 'Izolacyjne ćwiczenie na boczne mięśnie bioder. Podnoś nogę na skos dla intensywności.',
        ]);

        $this->createExercisesForBodyPart('Biceps', 'Łatwy', [
            'Uginanie ramion ze sztangą' => 'Podstawowe ćwiczenie na bicepsy, wykonuj je z kontrolowanym ruchem.',
            'Uginanie ramion ze sztangielkami' => 'Izolacyjne ćwiczenie dla bicepsów, utrzymuj napięcie w mięśniach.',
            'Uginanie ramion ze sztangą na modlitewniku' => 'Często stosowane ćwiczenie na biceps, kontroluj ruch i unikaj nadmiernego wychylania się.',
            'Młotkowe uginanie ramion' => 'Variacja uginania ramion, angażująca różne części bicepsów i mięśni przedramienia.',
            'Uginanie ramion ze sztangielkami na modlitewniku' => 'Izolacyjne ćwiczenie na biceps, utrzymuj napięcie w mięśniach i kontroluj ruch.',
            'Unoszenie hantli bokiem' => 'Ćwiczenie izolujące bicepsy, unikaj nadmiernego machania hantlami.',
            'Uginanie ramion ze sztangą w staniu' => 'Podstawowe ćwiczenie, kontroluj ruch i utrzymuj napięcie w mięśniach.',
            'Uginanie ramion ze sztangą na maszynie' => 'Izolacyjne ćwiczenie dla bicepsów, ustaw odpowiednią wagę i kontroluj ruch.',
            'Uginanie ramion ze sztangielkami w opadzie' => 'Izolacyjne ćwiczenie na biceps, utrzymuj napięcie w mięśniach i kontroluj ruch.',
            'Unoszenie hantli do boku w opadzie' => 'Izolacyjne ćwiczenie na biceps, kontroluj ruch i unikaj nadmiernego unoszenia hantli.',
        ]);

        $this->createExercisesForBodyPart('Biceps', 'Średni', [
            'Uginanie ramion ze sztangą na modlitewniku z supinacją' => 'Zaawansowane uginanie ramion, angażujące dodatkowo mięśnie przedramienia. Kontroluj ruch i unikaj nadmiernego wychylania się.',
            'Młotkowe uginanie ramion w opadzie' => 'Izolacyjne ćwiczenie dla bicepsów, wykonuj je z kontrolowanym ruchem i unikaj nadmiernego unoszenia hantli.',
            'Unoszenie hantli bokiem w opadzie' => 'Ćwiczenie izolujące bicepsy, unikaj nadmiernego machania hantlami. Kontroluj ruch i utrzymuj napięcie.',
            'Uginanie ramion ze sztangielkami w opadzie na ławce skośnej' => 'Izolacyjne ćwiczenie dla bicepsów, kontroluj ruch i utrzymuj napięcie w mięśniach.',
            'Unoszenie hantli do boku w staniu' => 'Izolacyjne ćwiczenie na biceps, kontroluj ruch i unikaj nadmiernego unoszenia hantli.',
            'Uginanie ramion ze sztangą na maszynie z supinacją' => 'Izolacyjne ćwiczenie dla bicepsów, ustaw odpowiednią wagę i kontroluj ruch.',
            'Młotkowe uginanie ramion z obrotem nadgarstka' => 'Zaawansowane ćwiczenie na biceps, angażuje dodatkowo mięśnie przedramienia. Kontroluj ruch i unikaj nadmiernego obrotu nadgarstka.',
            'Unoszenie sztangi bokiem' => 'Podstawowe ćwiczenie na bicepsy, kontroluj ruch i utrzymuj napięcie w mięśniach.',
            'Uginanie ramion ze sztangą w staniu z supinacją' => 'Izolacyjne ćwiczenie dla bicepsów, kontroluj ruch i utrzymuj napięcie w mięśniach.',
            'Unoszenie hantli do boku w opadzie na ławce skośnej' => 'Izolacyjne ćwiczenie na biceps, kontroluj ruch i unikaj nadmiernego unoszenia hantli.',
        ]);

        $this->createExercisesForBodyPart('Biceps', 'Zaawansowany', [
            'Uginanie ramion ze sztangą na modlitewniku z supinacją i obciążeniem' => 'Zaawansowane uginanie ramion z dodatkowym obciążeniem. Kontroluj ruch i unikaj nadmiernego wychylania się.',
            'Młotkowe uginanie ramion w opadzie na Bosu Ball' => 'Izolacyjne ćwiczenie dla bicepsów, wykonuj je z kontrolowanym ruchem na Bosu Ball. Unikaj nadmiernego unoszenia hantli.',
            'Unoszenie hantli bokiem z obciążeniem' => 'Ćwiczenie izolujące bicepsy, dodaj obciążenie dla intensywności. Kontroluj ruch i utrzymuj napięcie.',
            'Uginanie ramion ze sztangielkami w opadzie na ławce skośnej z obciążeniem' => 'Izolacyjne ćwiczenie dla bicepsów z dodatkowym obciążeniem. Kontroluj ruch i utrzymuj napięcie w mięśniach.',
            'Unoszenie hantli do boku w staniu na Bosu Ball' => 'Izolacyjne ćwiczenie na biceps, wykonuj je na Bosu Ball dla dodatkowej stabilizacji. Kontroluj ruch i unikaj nadmiernego unoszenia hantli.',
            'Uginanie ramion ze sztangą na maszynie z supinacją i obciążeniem' => 'Izolacyjne ćwiczenie dla bicepsów z dodatkowym obciążeniem. Ustaw odpowiednią wagę i kontroluj ruch.',
            'Młotkowe uginanie ramion z obrotem nadgarstka i obciążeniem' => 'Zaawansowane ćwiczenie na biceps z dodatkowym obciążeniem. Kontroluj ruch i unikaj nadmiernego obrotu nadgarstka.',
            'Unoszenie sztangi bokiem z obciążeniem' => 'Podstawowe ćwiczenie na bicepsy z dodatkowym obciążeniem. Kontroluj ruch i utrzymuj napięcie w mięśniach.',
            'Uginanie ramion ze sztangą w staniu z supinacją i obciążeniem' => 'Izolacyjne ćwiczenie dla bicepsów z dodatkowym obciążeniem. Kontroluj ruch i utrzymuj napięcie w mięśniach.',
            'Unoszenie hantli do boku w opadzie na ławce skośnej z obciążeniem' => 'Izolacyjne ćwiczenie na biceps z dodatkowym obciążeniem. Kontroluj ruch i unikaj nadmiernego unoszenia hantli.',
        ]);
    }

    private function createExercisesForBodyPart($bodyPartName, $difficultyLevelName, $exercises)
    {
        $bodyPartId = BodyPart::where('name', $bodyPartName)->first()->id;
        $difficultyLevelId = DifficultyLevel::where('name', $difficultyLevelName)->first()->id;

        foreach ($exercises as $exerciseName => $exerciseDescription) {
            Exercise::create([
                'name' => $exerciseName,
                'description' => $exerciseDescription,
                'body_part_id' => $bodyPartId,
                'difficulty_level_id' => $difficultyLevelId,
            ]);
        }
    }

}
