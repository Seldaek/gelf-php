<?php

/*
 * This file is part of the php-gelf package.
 *
 * (c) Benjamin Zikarsky <http://benjamin-zikarsky.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gelf\Transport;

/**
 * Abstraction of supported SSL configuration paramaters
 *
 * @author Benjamin Zikarsky <benjamin@zikarsky.de>
 */
class SslOptions
{
    /**
     * Enable certificate validation of remote party
     *
     * @param boolean
     */
    protected $verifyPeer = true;

    /**
     * Allow self-signed certificates
     *
     * @param boolean
     */
    protected $allowSelfSigned = false;

    /**
     * Path to custom CA 
     *
     * @param string
     */
    protected $caFile = null;

    /**
     * List of ciphers the SSL layer may use
     *
     * Formatted as specified in `ciphers(1)`
     *
     * @param string
     */
    protected $ciphers = null;
}

