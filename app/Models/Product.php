<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product
{
    protected $storageFile;

    private $name;
    private $qtd;
    private $value;
    private $dateTime;

    public function __construct($name = null, $qtd = null, $value = null)
    {
        $this->storageFile = storage_path().'/app/products.json';

        if(
            isset($name) &&
            isset($qtd) &&
            isset($value)
        ) {
            $this->name = $name;
            $this->qtd = $qtd;
            $this->value = $value;
            $this->dateTime = now();
        }

        return $this;
    }

    /**
     * Save Product to json FILE
     * @return [type] [description]
     */
    public function save()
    {
        $file = fopen($this->storageFile, 'a');
        fwrite($file, "\n".$this->toJson());
    }

    /**
     * Return Product as Json
     * @return json
     */
    private function toJson()
    {
        return json_encode([
            'name' => $this->name,
            'qtd' => $this->qtd,
            'value' => $this->value,
            'dateTime' => $this->dateTime
        ]);
    }

    public function all()
    {
        $file = file_get_contents($this->storageFile);
        $file = explode("\n", $file);
        $json = array();

        foreach ($file as $line) {
            $json[] = json_decode($line);
        }

        return $json;
    }
}
