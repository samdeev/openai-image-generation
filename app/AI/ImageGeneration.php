<?php

namespace App\AI;

use OpenAI\Laravel\Facades\OpenAI;

class ImageGeneration
{
    public function generate(string $prompt): string
    {
         return OpenAI::images()->create([
            'model' => 'dall-e-2',
            'prompt' => $prompt,
            'size' => '1024x1024',
            'quality' => 'standard',
            'n' => 1
        ])->data[0]->url;
    }
}
