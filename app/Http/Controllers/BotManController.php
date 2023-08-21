<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

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

      /**
       * Place your BotMan logic here.
      */

      public function pregunta_inicio($botman)
      {

          $botman->ask("Hola,Bienvenido a Eureka-E-Learning Easy, En que te puedo ayudar?", function(Answer $answer) {
          $pregunta = $answer->getText();
          while($pregunta!="informacion")
          {
            
          }
          if($pregunta=="informacion")
          {
            $this->say('Informacion siguiente ');

          }else{
            return;
          }

          
        });

      }
      
}