<?php

namespace TheRealJanJanssens\GoogleShoppingFeed;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TheRealJanJanssens\GoogleShoppingFeed
 */
class GoogleShoppingFeedFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'google-shopping-feed';
    }
}
