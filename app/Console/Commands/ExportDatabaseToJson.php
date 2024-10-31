<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ExportDatabaseToJson extends Command
{
    protected $signature = 'export:database-to-json';
    protected $description = 'Export database data to a JSON file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Step 1: Query the data from the database
        $data = DB::table('users')->get();

        // Step 2: Convert data to JSON format
        $jsonData = $data->toJson(JSON_PRETTY_PRINT);

        // Step 3: Define the file path and name
        $fileName = 'backup_' . date('Y_m_d_H_i_s') . '.json';
        $filePath = 'DatabaseBackup/' . $fileName;

        // Step 4: Save JSON data to a file
        Storage::disk('local')->put($filePath, $jsonData);

        $this->info('Database exported to JSON file: ' . $filePath);
    }
}
