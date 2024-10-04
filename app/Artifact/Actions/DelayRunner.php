<?php

namespace App\Artifact\Actions;

class DelayRunner
{
    /**
     * Exécute les actions avec un délai entre chaque.
     *
     * @param array $actions Tableau d'actions (fonctions ou tableaux imbriqués avec délais optionnels).
     * @param int $defaultDelay Temps de pause par défaut (en secondes) entre chaque action.
     */
    public function runActionsWithDelay(array $actions, int $delay = 5)
    {
        foreach ($actions as $index => $action) {
            // Vérifier si l'action est callable
            if (is_callable($action)) {
                echo "Executing action $index...\n";
                $action(); // Exécuter l'action

                // Appliquer le délai après l'action, sauf pour la dernière
                if ($index < count($actions) - 1) {
                    echo "Sleeping for $delay seconds...\n";
                    sleep($delay);
                }
            } else {
                echo "Action $index is not callable!\n";
            }
        }

        echo "All actions completed.\n";
    }
}
