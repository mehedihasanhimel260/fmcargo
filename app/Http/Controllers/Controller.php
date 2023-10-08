<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function setSuccessMessage($message)
    {
        session()->flash('success', $message);
    }

    public function setErrorMessage($message)
    {
        session()->flash('error', $message);
    }
}