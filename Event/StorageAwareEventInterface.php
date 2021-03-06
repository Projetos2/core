<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Event;

use Novosga\Infrastructure\StorageInterface;

/**
 * StorageAwareEventInterface
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
interface StorageAwareEventInterface extends EventInterface
{
    /**
     * @param StorageInterface $storage
     */
    public function setStorage(StorageInterface $storage);
    
    /**
     * @return StorageInterface
     */
    public function getStorage(): StorageInterface;
}
