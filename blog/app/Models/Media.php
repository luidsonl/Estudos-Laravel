<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'name', 'type', 'size'];

    /**
     * Armazena a imagem em um diretório baseado na data atual e define os atributos do model.
     *
     * @param string $mediaContent O conteúdo binário do arquivo de imagem.
     * @param string $imageName O nome do arquivo de imagem.
     * @return void
     */
    public function storeMedia($mediaContent, $imageName): void
    {
        // Diretório baseado na data (ex: upload/2024/11/02)
        $dateDirectory = date('Y/m/d');
        $relativePath = "upload/{$dateDirectory}/{$imageName}";

        // Define o caminho e o armazena
        $this->attributes['path'] = $relativePath;
        Storage::put($relativePath, $mediaContent);

        // Define atributos restantes
        $this->attributes['size'] = Storage::size($relativePath);
        $this->attributes['name'] = $imageName;
        $this->attributes['type'] = 'image/jpeg';
    }
}
