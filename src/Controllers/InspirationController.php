<?php

namespace Sakac\Inspire\Controllers;

use Sakac\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire): string
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
