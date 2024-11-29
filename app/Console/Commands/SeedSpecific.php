<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

class SeedSpecific extends Command
{
    protected $signature = 'seeder:run {seeder} {records=10}';
    protected $description = 'Run a specific seeder with number of records';

    public function handle()
    {
        $seeder = $this->argument('seeder');
        $records = $this->argument('records');

        // Verifica se il comando è stato eseguito da riga di comando
        /* if (php_sapi_name() !== 'cli') {
            $this->error('Questo comando può essere eseguito solo da riga di comando.');
            return;
        } */

        // Verifica validazioni
        /* if (!class_exists($seeder)) {
            $this->error("Il seeder {$seeder} non esiste.");
            return;
        }*/

        /* if (!is_numeric($records) || (int)$records <= 0) {
            $this->error('Il numero di records deve essere un numero intero positivo.');
            return;
        } */

        // Impostare il numero dei record nella configurazione
        Config::set('seeding.records', $records);

        // Chiamare il seeder senza passare l'opzione --records
        $this->call('db:seed', ['--class' => $seeder]);
        $this->info("Seeder {$seeder} eseguito con {$records} records.");
    }
}