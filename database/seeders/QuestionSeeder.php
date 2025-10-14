<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Quiz;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'Matemātikas tests',
        ]);

        // Easy
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 5 + 3?',
            'options' => json_encode(['6','7','8','9']),
            'answer' => '8',
            'difficulty' => 'easy',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds ir nākamais skaitlis pēc 9?',
            'options' => json_encode(['8','9','10','11']),
            'answer' => '10',
            'difficulty' => 'easy',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 2 + 6?',
            'options' => json_encode(['6','7','8','9']),
            'answer' => '8',
            'difficulty' => 'easy',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 10 - 4?',
            'options' => json_encode(['4','5','6','7']),
            'answer' => '6',
            'difficulty' => 'easy',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 3 × 2?',
            'options' => json_encode(['5','6','7','8']),
            'answer' => '6',
            'difficulty' => 'easy',
            'topic' => 'math',
        ]);

        // medium
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 12 × 3?',
            'options' => json_encode(['36','24','15','30']),
            'answer' => '36',
            'difficulty' => 'medium',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds ir 25% no 80?',
            'options' => json_encode(['10','15','20','25']),
            'answer' => '20',
            'difficulty' => 'medium',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 45 ÷ 5?',
            'options' => json_encode(['7','8','9','10']),
            'answer' => '9',
            'difficulty' => 'medium',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 7 × 8?',
            'options' => json_encode(['54','56','58','60']),
            'answer' => '56',
            'difficulty' => 'medium',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 100 - 37?',
            'options' => json_encode(['63','64','65','66']),
            'answer' => '63',
            'difficulty' => 'medium',
            'topic' => 'math',
        ]);

        // Hard
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir kvadrātsakne no 225?',
            'options' => json_encode(['14','15','16','17']),
            'answer' => '15',
            'difficulty' => 'hard',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 13 × 17?',
            'options' => json_encode(['211','221','231','241']),
            'answer' => '221',
            'difficulty' => 'hard',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 144 ÷ 12?',
            'options' => json_encode(['10','11','12','13']),
            'answer' => '12',
            'difficulty' => 'hard',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik ir 2^5?',
            'options' => json_encode(['16','32','64','128']),
            'answer' => '32',
            'difficulty' => 'hard',
            'topic' => 'math',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds ir 60% no 250?',
            'options' => json_encode(['120','130','140','150']),
            'answer' => '150',
            'difficulty' => 'hard',
            'topic' => 'math',
        ]);
        // Geography - Easy
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura ir Latvijas galvaspilsēta?',
            'options' => json_encode(['Rīga','Tallina','Viļņa','Prāga']),
            'answer' => 'Rīga',
            'difficulty' => 'easy',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura ir lielākā okeāna pasaulē?',
            'options' => json_encode(['Atlantijas','Indijas','Klusais','Arktikas']),
            'answer' => 'Klusais',
            'difficulty' => 'easy',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura valsts atrodas uz Apenīnu pussalas?',
            'options' => json_encode(['Spānija','Itālija','Francija','Vācija']),
            'answer' => 'Itālija',
            'difficulty' => 'easy',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura ir lielākā sala pasaulē?',
            'options' => json_encode(['Austrālija','Grenlande','Madagaskara','Sumatra']),
            'answer' => 'Grenlande',
            'difficulty' => 'easy',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura upe plūst caur Rīgu?',
            'options' => json_encode(['Daugava','Gauja','Venta','Lielupe']),
            'answer' => 'Daugava',
            'difficulty' => 'easy',
            'topic' => 'geography',
        ]);

        // Geography - medium
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura ir otrā lielākā valsts pasaulē pēc platības?',
            'options' => json_encode(['ASV','Kanāda','Ķīna','Brazīlija']),
            'answer' => 'Kanāda',
            'difficulty' => 'medium',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura kalnu grēda atrodas starp Eiropu un Āziju?',
            'options' => json_encode(['Alpi','Karpati','Urāli','Andi']),
            'answer' => 'Urāli',
            'difficulty' => 'medium',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura ir garākā upe Āfrikā?',
            'options' => json_encode(['Nīla','Kongo','Nigēra','Zambezi']),
            'answer' => 'Nīla',
            'difficulty' => 'medium',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura valsts robežojas ar visvairāk valstīm?',
            'options' => json_encode(['Krievija','Ķīna','Brazīlija','Vācija']),
            'answer' => 'Ķīna',
            'difficulty' => 'medium',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura ir lielākā pilsēta pēc iedzīvotāju skaita pasaulē?',
            'options' => json_encode(['Tokija','Ņujorka','Londona','Maskava']),
            'answer' => 'Tokija',
            'difficulty' => 'medium',
            'topic' => 'geography',
        ]);

        // Geography - Hard
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura ir augstākā virsotne Dienvidamerikā?',
            'options' => json_encode(['Aconcagua','Kilimandžaro','Elbruss','Denali']),
            'answer' => 'Aconcagua',
            'difficulty' => 'hard',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura valsts ir pazīstama kā "Tūkstoš ezeru zeme"?',
            'options' => json_encode(['Zviedrija','Somija','Norvēģija','Kanāda']),
            'answer' => 'Somija',
            'difficulty' => 'hard',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura ir mazākā neatkarīgā valsts pasaulē?',
            'options' => json_encode(['Monako','Vatikāns','Sanmarīno','Lihtenšteina']),
            'answer' => 'Vatikāns',
            'difficulty' => 'hard',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kurš ir dziļākā ezera pasaulē?',
            'options' => json_encode(['Baikāls','Tanganjika','Drīdzis','Superior']),
            'answer' => 'Baikāls',
            'difficulty' => 'hard',
            'topic' => 'geography',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura valsts atrodas gan Eiropā, gan Āzijā?',
            'options' => json_encode(['Turcija','Spānija','Ēģipte','Indija']),
            'answer' => 'Turcija',
            'difficulty' => 'hard',
            'topic' => 'geography',
        ]);
        // Sport - Easy
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik spēlētāju ir futbola komandā laukumā?',
            'options' => json_encode(['9','10','11','12']),
            'answer' => '11',
            'difficulty' => 'easy',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds sporta veids tiek spēlēts ar tenisa raketi?',
            'options' => json_encode(['Teniss','Basketbols','Badmintons','Hokejs']),
            'answer' => 'Teniss',
            'difficulty' => 'easy',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds ir galvenais mērķis basketbolā?',
            'options' => json_encode(['Iemest bumbu grozā','Iemest bumbu vārtos','Pieskarties bumbai ar kāju','Peldēt ātrāk']),
            'answer' => 'Iemest bumbu grozā',
            'difficulty' => 'easy',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds sporta veids tiek spēlēts uz ledus ar nūjām?',
            'options' => json_encode(['Hokejs','Futbols','Basketbols','Teniss']),
            'answer' => 'Hokejs',
            'difficulty' => 'easy',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds sporta veids ir saistīts ar Olimpiskajām spēlēm?',
            'options' => json_encode(['Daudzi sporta veidi','Tikai futbols','Tikai teniss','Tikai hokejs']),
            'answer' => 'Daudzi sporta veidi',
            'difficulty' => 'easy',
            'topic' => 'sport',
        ]);

        // Sport - medium
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kurā gadā Latvija ieguva pirmo olimpisko zelta medaļu?',
            'options' => json_encode(['1992','2000','2008','2012']),
            'answer' => '2000',
            'difficulty' => 'medium',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds ir maksimālais punktu skaits vienā volejbola setā (bez pārsvara)?',
            'options' => json_encode(['21','25','30','15']),
            'answer' => '25',
            'difficulty' => 'medium',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura valsts ir izcīnījusi visvairāk FIFA Pasaules kausu?',
            'options' => json_encode(['Vācija','Itālija','Brazīlija','Francija']),
            'answer' => 'Brazīlija',
            'difficulty' => 'medium',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Cik minūtes ilgst standarta hokeja spēle (bez papildlaika)?',
            'options' => json_encode(['60','70','80','90']),
            'answer' => '60',
            'difficulty' => 'medium',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds sporta veids ir saistīts ar "Grand Slam" turnīriem?',
            'options' => json_encode(['Teniss','Futbols','Basketbols','Hokejs']),
            'answer' => 'Teniss',
            'difficulty' => 'medium',
            'topic' => 'sport',
        ]);

        // Sport - Hard
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kurš latviešu sportists ir izcīnījis olimpisko zelta medaļu BMX riteņbraukšanā?',
            'options' => json_encode(['Māris Štrombergs','Ernests Gulbis','Kristaps Porziņģis','Sandis Ozoliņš']),
            'answer' => 'Māris Štrombergs',
            'difficulty' => 'hard',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kura valsts ir uzvarējusi visvairāk olimpisko medaļu kopvērtējumā?',
            'options' => json_encode(['ASV','Krievija','Ķīna','Vācija']),
            'answer' => 'ASV',
            'difficulty' => 'hard',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kurā gadā notika pirmais FIFA Pasaules kauss?',
            'options' => json_encode(['1928','1930','1934','1940']),
            'answer' => '1930',
            'difficulty' => 'hard',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kurš basketbolists ir visvairāk reizes kļuvis par NBA čempionu?',
            'options' => json_encode(['Michael Jordan','Bill Russell','LeBron James','Kobe Bryant']),
            'answer' => 'Bill Russell',
            'difficulty' => 'hard',
            'topic' => 'sport',
        ]);
        Question::create([
            'quiz_id' => $quiz->id,
            'question' => 'Kāds ir maratona distances garums kilometros?',
            'options' => json_encode(['40.195','41.195','42.195','43.195']),
            'answer' => '42.195',
            'difficulty' => 'hard',
            'topic' => 'sport',
        ]);
        
    }
}