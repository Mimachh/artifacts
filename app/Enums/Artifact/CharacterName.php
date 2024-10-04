<?php

namespace App\Enums\Artifact;

enum CharacterName: string
{
    case Mimach = 'Mimach';

    public static function toArray(): array
    {
        return [
            'Mimach' => 'Mimach',
        ];
    }
}
