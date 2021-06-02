<?php

namespace Neputer\Lib;

use Exception;
use Illuminate\Session\Store as Session;

/**
 * Class Flash
 *
 * @package Neputer\Lib
 */
class Flash
{

    /**
     * @var Session
     */
    private $session;

    /**
     * Message type for notifications
     *
     * @var array
     */
    private $messageTypes = [
        'success', 'error', 'info', 'warning', 'danger',
    ];

    /**
     * Flash constructor.
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @param $key
     * @param $message
     */
    public function notify ($key, $message)
    {
        $this->session->flash('notify', [
            'type'     => $key,
            'response' => $message,
        ]);
    }

    /**
     * @param $method
     * @param $arguments
     * @return mixed
     * @throws Exception
     */
    public function __call( $method, $arguments )
    {
        if (in_array($method, $this->messageTypes)) {
            return call_user_func_array( [ $this, 'notify' ], $arguments );
        }
        throw new Exception( "{$method} method not found !" );
    }

}
