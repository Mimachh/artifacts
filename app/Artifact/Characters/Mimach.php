<?php

namespace App\Artifact\Characters;

use App\Artifact\Actions\Movement;
use App\Artifact\Destination;
use App\Enums\Artifact\CharacterName;

class Mimach
{
    private $name;
    private $movement;
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->name = CharacterName::Mimach->value;
        $this->movement = new Movement();
    }

    public function goTo($destination) {
        $movement = $this->movement->goTo(
            $this->name,
            $destination
        );
        return $movement;
    }
    
}
