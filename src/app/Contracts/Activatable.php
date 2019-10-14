<?php

namespace LaravelEnso\Helpers\app\Contracts;

interface Activatable
{
    public function isActive(): bool;
    
    public function isInactive(): bool;
}