<?php

namespace App\Artifact;

class Destination
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function cooking() {
        return [
            'x' => 1,
            'y' => 1
        ];
    }

    public function weapon_crafting() {
        return [
            'x' => 2,
            'y' => 1
        ];
    }

    public function gear_crafting() {
        return [
            'x' => 3,
            'y' => 1
        ];
    }
}
