<?php

namespace Adswerve\GoogleAnalyticsAndAdwords\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Service extends AbstractEntity
{
    /**
     * Id (Measurement ID, Tracking ID, or Conversion ID)
     *
     * @var string
     */
    protected $serviceId = '';

    /**
     * __construct
     */
    public function __construct(string $serviceId = '')
    {
        $this->setServiceId($serviceId);
    }

    public function setServiceId(string $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    public function getServiceId(): string
    {
        return $this->serviceId;
    }
}
