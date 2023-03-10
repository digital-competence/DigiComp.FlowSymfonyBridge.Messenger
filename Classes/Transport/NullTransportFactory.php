<?php

namespace DigiComp\FlowSymfonyBridge\Messenger\Transport;

use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;
use Symfony\Component\Messenger\Transport\TransportFactoryInterface;
use Symfony\Component\Messenger\Transport\TransportInterface;

class NullTransportFactory implements TransportFactoryInterface
{
    public function createTransport(string $dsn, array $options, SerializerInterface $serializer): TransportInterface
    {
        return new NullTransport();
    }

    public function supports(string $dsn, array $options): bool
    {
        return \str_starts_with($dsn, 'null://');
    }
}
