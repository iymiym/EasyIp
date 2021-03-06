<?php

/*
 * This file is part of the icecho/easyip.
 *
 * (c) icecho <iymiym@icloud.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Icecho\EasyIp\Contracts;

interface Resolvable
{
    /**
     * @param string $ip
     *
     * @return array
     */
    public function parse(string $ip);

    /**
     * @return string
     */
    public function getProviderName();
}
