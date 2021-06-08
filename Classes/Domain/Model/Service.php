<?php

namespace Adswerve\GoogleAnalyticsAndAdwords\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Service extends AbstractEntity
{

    /**
     * Product of Service ['Google Analytics', 'Google Ads']
     *
     * @var string
     */
    protected $product = '';

    /**
     * Service Id (Measurement ID, Tracking ID, or Conversion ID)
     *
     * @var string
     */
    protected $serviceId = '';

    /**
     * __construct
     */
    public function __construct(string $product = '', string $serviceId = '')
    {
        $this->setProduct($product);
        $this->setServiceId($serviceId);
    }

    public function setProduct(string $product): void
    {
        $this->product = $product;
    }

    public function getProduct(): string
    {
        return $this->product;
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
