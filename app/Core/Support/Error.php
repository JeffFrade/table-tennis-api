<?php

namespace App\Core\Support;

use Illuminate\Support\Facades\Log;

trait Error
{
    protected function getError(\Exception $e)
    {
        Log::channel('slack')->critical('Error: ' . $e->getMessage() . ' File: ' . $e->getFile() . ' Line: ' . $e->getLine());
    }
}
