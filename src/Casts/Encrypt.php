<?php

namespace LaravelEnso\Helpers\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class Encrypt implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        try {
            return Crypt::decryptString($value);
        } catch (DecryptException $e) {
            return null;
        }
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return Crypt::encryptString($value);
    }
}
