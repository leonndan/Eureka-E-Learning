<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;


class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
        $botman->hears('.*Hola|Buenos dias|Buenas tardes|Buenas noches.*', function ($botman) {
            $botman->reply("En que te puedo ayudar?");
        });
        $botman->hears("'.*|Curso|Cursos.*'", function ($botman) {
            $this->Informacion($botman);
        });
        $botman->hears(".*Asesoramiento.*", function ($botman) {
            $this->Asesoramiento($botman);
        });
        $botman->hears(".*servicios|servicio.*", function ($botman) {
            $this->Servicios($botman);
        });
        $botman->hears(".*caracteristicas.*", function ($botman) {
            $this->Servicios($botman);
        });
        $botman->hears(".*Contacto.*", function ($botman) {
            $this->Contacto($botman);
        });
        $botman->hears(".*Redes|Redes sociales.*", function ($botman) {
            $this->Redes($botman);
        });

        $botman->fallback(function ($botman) {
            $botman->reply("Lo siento, no entendí tu mensaje. ¿En qué te puedo ayudar?");
        });    
        
        $botman->listen();
    }
    /*
    public function pregunta_inicio($botman)
    {
        $pregunta = Question::create("En qué te puedo ayudar?")
            ->addButtons([
                Button::create("Informacion")->value("uno"),
                Button::create("Asesoramiento")->value("dos"),
                Button::create("Servicios")->value("tres"),
                Button::create("Cita")->value("cuatro"),
                Button::create("Contacto")->value("cinco"),
                Button::create("Redes")->value("seis"),
            ]);

        $botman->ask($pregunta, function (Answer $answer,$botman){
            $selectedOption = $answer->getValue();

            if ($selectedOption === 'uno') {
                 $this->say("Eureka E-Learning Easy es una consultoria educativa para maestras de nivel preescolar, donde puedes encontrar cursos y asesoramientos para diferentes planes");
            } elseif ($selectedOption === 'dos') {
                // ... lógica para la opción "Asesoramiento" ...
            } elseif ($selectedOption === 'tres') {
                $this->say('Has seleccionado la Opción C.');
            } elseif ($selectedOption === 'cuatro') {
                $this->say('Has seleccionado la Opción C.');
            } elseif ($selectedOption === 'cinco') {
                $this->say('Has seleccionado la Opción C.');
            } elseif ($selectedOption === 'seis') {
                $this->say('Has seleccionado la Opción C.');
            } else {
                $this->say('No entiendo tu selección.');
            }
        });
       
    }
    */
    public function Informacion($botman)
    {
        $botman->reply("Eureka E-Learning Easy es una consultoria educativa para maestras de nivel preescolar, donde puedes encontrar cursos y asesoramientos para diferentes planes");
    }

    public function Asesoramiento($botman)
    {
        $botman->reply("Para tener un asesoramiento favor de mandar un mensaje en la parte de contacto y un agente pronto te respodnera.");
    }
    public function Servicios($botman)
    {
        $botman->reply("Eureka cuenta con multiples servicios como lo pueden ser : Cursos, Regulaciones, Planes de estudio, Diplomados. Puedes encontrar mas en la parte de Servicios.");
    }
    public function Contacto($botman)
    {
        $botman->reply("Email: eurekaelearningeasy@gmail.com");
    }
    public function Redes($botman)
    {
        $botman->reply("Facebook: Eureka E-Learning easy");
        $botman->reply("Instagram: eureka_elearning_easy");
    }

      
}

      