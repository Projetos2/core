<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Service;

/**
 * Configuration
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class Configuration
{
    /**
     * @var string
     */
    private $default;

    /**
     * @var string
     */
    private $custom;

    public function __construct($rootDir)
    {
        $this->default = require("{$rootDir}/config/app.default.php");

        $customFile = "{$rootDir}/config/app.php";
        if (file_exists($customFile)) {
            $this->custom  = require($customFile);
        }

        if (!$this->default) {
            $this->default = [];
        }

        if (!$this->custom) {
            $this->custom = [];
        }
    }

    public function get($key)
    {
        $value  = null;
        $obj    = $this->default;
        $tokens = explode('.', $key);
        
        foreach ($tokens as $prop) {
            if (is_array($obj)) {
                $value = $this->resolve($prop, $obj);
                $obj   = $value;
            } else {
                break;
            }
        }

        return $value;
    }

    private function resolve($key, array $obj)
    {
        return $this->resolveValue($key, $this->custom, $obj);
    }

    private function resolveValue($key, array $primary, array $secondary)
    {
        if (isset($primary[$key])) {
            return $primary[$key];
        }

        if (isset($secondary[$key])) {
            return $secondary[$key];
        }

        return null;
    }
}
