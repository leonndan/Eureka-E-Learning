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
        $botman->hears('{message}', function($botman, $message) {
        if ($message == 'Hola')
         {
           $this->pregunta_inicio($botman);
         }
         else
         {
           $botman->reply("Escribe Hola para comenzar...");
         }
      });

      $botman->listen();

      }
      public function pregunta_inicio($botman)
      {

        $pregunta=Question::create("En que te puedo ayudar?")->addButtons([

            Button::create("Informacion")->value("uno"),
            Button::create("Asesoramiento")->value("dos"),
            Button::create("Servicios")->value("tres"),
            Button::create("Cita")->value("cuatro"),
            Button::create("Contacto")->value("cinco"),
            Button::create("Redes")->value("seis"),
            
        ]);

        $botman->ask($pregunta,function (Answer $answer) {
            $selectedOption = $answer->getValue();

            if ($selectedOption === 'uno') {
                $this->say('Has seleccionado la Opción A.');
            } elseif ($selectedOption === 'dos') {
                $this->say('Has seleccionado la Opción B.');
            } elseif ($selectedOption === 'tres') {
                $this->say('Has seleccionado la Opción C.');
            } 
            elseif ($selectedOption === 'cuatro') {
                $this->say('Has seleccionado la Opción C.');
            } 
            elseif ($selectedOption === 'cinco') {
                $this->say('Has seleccionado la Opción C.');
            } 
            elseif ($selectedOption === 'seis') {
                $this->say('Has seleccionado la Opción C.');
            } else {
                $this->say('No entiendo tu selección.');
                $this->handle();
            }
        });

      }
      
}

      