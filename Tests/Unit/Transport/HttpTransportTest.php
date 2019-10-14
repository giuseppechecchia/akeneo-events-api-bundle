<?php

declare(strict_types=1);

namespace Trilix\EventsApiBundle\Tests\Unit\Transport;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Trilix\EventsApiBundle\HttpClient\HttpClientFactoryInterface;
use Trilix\EventsApiBundle\HttpClient\HttpClientInterface;
use Trilix\EventsApiBundle\OuterEvent\OuterEvent;
use Trilix\EventsApiBundle\Transport\HttpTransport;

class HttpTransportTest extends TestCase
{
    /**
     * @test
     */
    public function deliversOuterEventViaHttpClient(): void
    {
        $outerEvent = new OuterEvent('foo_event', ['foo' => 'payload']);

        /** @var HttpClientInterface|MockObject $httpClient */
        $httpClient = $this->getMockBuilder(HttpClientInterface::class)->getMock();
        /** @var HttpClientFactoryInterface|MockObject $httpClientFactory */
        $httpClientFactory = $this->getMockBuilder(HttpClientFactoryInterface::class)->getMock();

        $httpClientFactory->expects($this->once())->method('create')
            ->with('http://localhost:1234')->willReturn($httpClient);
        $httpClient->expects($this->once())->method('send')->with(json_encode($outerEvent));

        $httpTransport = new HttpTransport('http://localhost:1234', $httpClientFactory);

        $httpTransport->deliver($outerEvent);
    }
}
