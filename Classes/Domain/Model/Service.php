<?php

namespace Adswerve\GoogleAnalyticsAndAdwords\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Service extends AbstractEntity
{

    /**
     * Product of Service ['google-analytics', 'google-ads']
     *
     * @var string
     */
    protected $product = '';
    
    /**
     * Version of Google Analytics ['ga4', 'ua']
     *
     * @var string
     */
    protected $gaVersion = '';

    /**
     * Id (Measurement ID, Tracking ID, or Conversion ID)
     *
     * @var string
     */
    protected $serviceId = '';

    /**
     * Conversion Label (only applicable to Google Ads)
     *
     * @var string
     */
    protected $conversionLabel = '';

    /**
     * __construct
     */
    public function __construct(string $product = '', string $gaVersion = '', string $serviceId = '', string $conversionLabel)
    {
        $this->setProduct($product);
        $this->setGaVersion($gaVersion);
        $this->setServiceId($serviceId);
        $this->SetConversionLabel($conversionLabel);
    }

    public function setProduct(string $product): void
    {
        $this->product = $product;
    }

    public function getProduct(): string
    {
        return $this->product;
    }

    public function setGaVersion(string $gaVersion): void
    {
        $this->gaVersion = $gaVersion;
    }

    public function getGaVersion(): string
    {
        return $this->gaVersion;
    }

    public function setServiceId(string $serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    public function setConversionLabel(string $conversionLabel): void
    {
        $this->conversionLabel = $conversionLabel;
    }

    public function getConversionLabel(): string
    {
        return $this->conversionLabel;
    }

}
