<?php

namespace App\Http\Controllers\Artifact;

use App\Artifact\Actions\DelayRunner;
use App\Artifact\Characters\Mimach;
use App\Artifact\Destination;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $mimach;
    private $destination;
    private $runner;

    /**
     * Handle the incoming request.
     */
    public function __construct()
    {
        $this->mimach = new Mimach();
        $this->destination = new Destination();
        $this->runner = new DelayRunner();
    }
    public function __invoke()
    {
   

        // $this->mimach->goTo($this->destination->cooking());
        // sleep(5);
        // $this->mimach->goTo($this->destination->weapon_crafting());
        // sleep(5);
        // $this->mimach->goTo($this->destination->cooking());
        // sleep(5);
        // $this->mimach->goTo($this->destination->gear_crafting());
        

        $mimach = new Mimach(); // Remplacez par votre logique d'initialisation
        $destination = new Destination(); // Remplacez par votre logique d'initialisation

        // Définition des actions
        $actions = [
            function () use ($mimach, $destination) {
                echo "Action 1: Going to Cooking\n";
                $mimach->goTo($destination->cooking());
            },
            function () use ($mimach, $destination) {
                echo "Action 2: Going to Weapon Crafting\n";
                $mimach->goTo($destination->weapon_crafting());
            },
            function () use ($mimach, $destination) {
                echo "Action 3: Going to Gear Crafting\n";
                $mimach->goTo($destination->gear_crafting());
            },
            function () use ($mimach, $destination) {
                echo "Action 4: Going to Weapon Crafting Again\n";
                $mimach->goTo($destination->weapon_crafting());
            },
        ];

        $this->runner->runActionsWithDelay($actions);


        // return Inertia::render('Welcome', [
        //     'canLogin' => Route::has('login'),
        //     'canRegister' => Route::has('register'),
        //     'laravelVersion' => Application::VERSION,
        //     'phpVersion' => PHP_VERSION,
        // ]);
    }
}
