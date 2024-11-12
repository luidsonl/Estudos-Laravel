<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'name', 'description', 'type', 'size'];

    /**
     * Armazena o arquivo em um diretório baseado na data atual e define os atributos do model.
     *
     * @param string $mediaContent O conteúdo binário do arquivo.
     * @param string $mediaName O nome do arquivo.
     * @return void
     */
    public function storeMedia($mediaContent, $mediaName): void
    {
        $dateDirectory = date('Y/m/d');
        
        $relativePath = "upload/{$dateDirectory}/{$mediaName}";


        Storage::put($relativePath, $mediaContent);

        $this->attributes['path'] = $relativePath;
        $this->attributes['size'] = Storage::size($relativePath);
        $this->attributes['type'] = pathinfo($mediaName, PATHINFO_EXTENSION);
    }
}
