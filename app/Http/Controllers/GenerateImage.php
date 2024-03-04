<?php

namespace App\Http\Controllers;

use App\AI\ImageGeneration;
use Illuminate\Http\Request;
use function redirect;

class GenerateImage extends Controller
{
    public function __invoke(Request $request)
    {
        $attributes = $request->validate([
            'prompt' => ['required', 'string', 'min:2']
        ]);

        $image = (new ImageGeneration())->generate($attributes['prompt']);

        $request->session()->push('images', $image);

        return redirect('/');
    }
}
