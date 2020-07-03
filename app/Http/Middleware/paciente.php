<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Session;

use Closure;

class paciente
{
    protected $auth;
    public function __construct(Guard $auth)
    {
       $this->auth = $auth; 
    }
     
     
      public function handle($request, Closure $next)
     {
 
         switch($this->auth->user()->id_rol){
 
             case '1':
 
             return redirect()->to('medico');
 
             break;
 
             case '2':
 
                // return redirect()->to('paciente');
     
                 break;
 
         }
         return $next($request);
     }
 }
 