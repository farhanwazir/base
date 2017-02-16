<?php

namespace Restvel\Base\Http;

use Illuminate\Http\Request as HttpRequest;

class Request extends HttpRequest
{
    /**
     * Return the Request instance.
     *
     * @return $this
     */
    public function instance()
    {
        return $this;
    }
}
