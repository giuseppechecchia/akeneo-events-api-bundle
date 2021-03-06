<?php

declare(strict_types=1);

namespace Frmoda\Bundle\EventsApiBundle\Transport;

interface TransportFactoryInterface
{
    /**
     * @param array $options
     * @return Transport
     */
    public function create(array $options): Transport;
}
