<?php

namespace App\Services;

/**
 * Class SlugService
 *
 * Servizio per la generazione di slug da titoli.
 */
class SlugService
{
    /**
     * Converte un titolo in uno slug.
     *
     * Questo metodo rimuove i caratteri non desiderati, converte il titolo in minuscolo,
     * e sostituisce gli spazi con trattini.
     *
     * @param string $title Il titolo da convertire in slug.
     * @return string Lo slug generato.
     */
    public static function toSlug(string $title): string
    {
        // Rimozione di caratteri non desiderati, conversione in minuscolo, e sostituzione degli spazi con trattini
        return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $title));
    }
}
