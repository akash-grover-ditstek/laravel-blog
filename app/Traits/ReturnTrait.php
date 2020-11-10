<?php

namespace App\Traits;

trait ReturnTrait
{
    public function returnExpectJson($messages = [], $flash = [], $status = 200)
    {
        if (!empty($flash)) {
            foreach ($flash as $key => $value) {
                session()->flash($key, $value);
            }
        }
        return response()->json($messages);
    }
}
