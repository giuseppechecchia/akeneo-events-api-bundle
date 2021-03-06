<?php

declare(strict_types=1);

namespace Frmoda\Bundle\EventsApiBundle\Tests\Unit\Transport;

use Assert\InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Frmoda\Bundle\EventsApiBundle\HttpClient\HttpClientFactoryInterface;
use Frmoda\Bundle\EventsApiBundle\HttpClient\RequestFactoryInterface;
use Frmoda\Bundle\EventsApiBundle\Transport\IFTTTWebHooksTransport;
use Frmoda\Bundle\EventsApiBundle\Transport\IFTTTWebHooksTransportFactory;

class IFTTTWebHooksTransportFactoryTest extends TestCase
{
    private const IFTTT_WEBHOOKS_REQUEST_URL = 'https://maker.ifttt.com/trigger/{event}/with/key/f48alXOMKZopZMCRG-I5HWbHQYvAtm4v9lHUoVkDAnu';

    /**
     * @test
     * @dataProvider invalidOptionsDataProvider
     * @param array $options
     */
    public function throwsExceptionIfOptionsAreInvalid(array $options): void
    {
        $this->expectException(InvalidArgumentException::class);

        /** @var HttpClientFactoryInterface|MockObject $httpClientFactory */
        $httpClientFactory = $this->createMock(HttpClientFactoryInterface::class);
        /** @var RequestFactoryInterface|MockObject $requestFactory */
        $requestFactory = $this->createMock(RequestFactoryInterface::class);
        $factory = new IFTTTWebHooksTransportFactory($httpClientFactory, $requestFactory);

        $factory->create($options);
    }

    /**
     * @test
     */
    public function createsIFTTTWebHooksTransport(): void
    {
        /** @var HttpClientFactoryInterface|MockObject $httpClientFactory */
        $httpClientFactory = $this->createMock(HttpClientFactoryInterface::class);
        /** @var RequestFactoryInterface|MockObject $requestFactory */
        $requestFactory = $this->createMock(RequestFactoryInterface::class);

        $factory = new IFTTTWebHooksTransportFactory($httpClientFactory, $requestFactory);

        $transport = $factory->create(['request_url' => self::IFTTT_WEBHOOKS_REQUEST_URL]);

        self::assertInstanceOf(IFTTTWebHooksTransport::class, $transport);
    }

    public function invalidOptionsDataProvider(): array
    {
        return [
            [[]],
            [['foo']],
            [['foo' => 'bar']],
            [['request_url' => '']],
            [['request_url' => 'url_value']]
        ];
    }
}
