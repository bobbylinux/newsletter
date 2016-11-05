<?php

use Illuminate\Database\Seeder;
use App\Riferimento;

class RiferimentiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(database_path().'/data/riferimenti.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            try {
                Riferimento::create(array(
                    'id' => $obj->id,
                    'descrizione' => $obj->descrizione
                ));
            } catch (QueryException  $e) {
                var_dump($e->errorInfo );
            }
        }
    }
}
