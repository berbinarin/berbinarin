<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'api/psikotest-paid/post-company',
        'api/psikotest-paid/post-education',
        'api/psikotest-paid/post-community',
        'api/psikotest-paid/post-individual',
        'api/psikotest-paid/post-clinical',
        'api/*',
    ];
}
