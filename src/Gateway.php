<?php

namespace Larabookir\Gateway;

use http\Client\Curl\User;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Larabookir\Gateway\GatewayResolver
 */
class Gateway extends Facade
{
	/**
	 * The name of the binding in the IoC container.
	 *
	 * @return string
	 */

	 public $user;
	 public function __construct()

     {
         $this->user=auth()->user;
     }

    protected static function getFacadeAccessor()
	{
		return 'gateway';
	}
}
