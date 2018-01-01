<?php


namespace Ivory\GoogleMap\Service\Road\Snap;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Ivory\GoogleMap\Service\AbstractSerializableService;
use Ivory\GoogleMap\Service\Road\Snap\Request\SnapToRoadRequest;
use Ivory\GoogleMap\Service\Road\Snap\Response\SnapToRoadResponse;
use Ivory\Serializer\Context\Context;
use Ivory\Serializer\Naming\SnakeCaseNamingStrategy;
use Ivory\Serializer\SerializerInterface;

/**
 * @author fedotovaleksandr <mr.fedotovaleksandr@gmail.com>
 */
class SnapToRoadService extends AbstractSerializableService
{
    /**
     * @param HttpClient               $client
     * @param MessageFactory           $messageFactory
     * @param SerializerInterface|null $serializer
     */
    public function __construct(
        HttpClient $client,
        MessageFactory $messageFactory,
        SerializerInterface $serializer = null
    ) {
        parent::__construct(
            'https://roads.googleapis.com/v1/snapToRoads',
            $client,
            $messageFactory,
            $serializer
        );
    }

    /**
     * @param SnapToRoadRequest $request
     *
     * @return SnapToRoadResponse
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
  public function snapToRoads(SnapToRoadRequest $request) {
      $httpRequest = $this->createRequest($request);
      $httpResponse = $this->getClient()->sendRequest($httpRequest);

      $response = $this->deserialize(
          $httpResponse,
          SnapToRoadResponse::class,
          (new Context())->setNamingStrategy(new SnakeCaseNamingStrategy())
      );

      $response->setRequest($request);

      return $response;
  }
}