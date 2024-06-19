<?php

namespace App\Exceptions;

use Throwable;
use Request;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\View;
use Response;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */

    
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
        // return response()->json(['success'=>'Sesion Cerrada...']);
        // return redirect()->guest('login');
        
    }

    protected function unauthenticated($request, AuthenticationException $exception){
        
      // return redirect()->guest(route('login'))->with('successlogin', 'Sesion Cerrada...');
      // return redirect()->guest('login');

      if ($request->ajax()) {    
        return response()->json(['successlogin'=>'Sesion Cerrada...']);
      }  else {
        return redirect()->guest('login');
      }
      //$view = View::make('auth.login')->renderSections();
      //return json_encode($view);  
    }
}
