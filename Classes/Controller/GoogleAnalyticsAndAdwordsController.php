<?php

namespace Adswerve\GoogleAnalyticsAndAdwords\Controller;

use Adswerve\GoogleAnalyticsAndAdwords\Domain\Repository\ServiceRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class ServiceController
 *
 * @package Adswerve\GoogleAnalyticsAndAdwords\Controller
 */
class GoogleAnalyticsAndAdwordsController extends ActionController
{
    /**
     * @var ServiceRepository
     */
    private $serviceRepository;

    /**
     * Inject the service repository
     *
     * @param \Adswerve\GoogleAnalyticsAndAdwords\Domain\Repository\ServiceRepository $serviceRepository
     */
    public function injectServiceRepository(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * List Action
     *
     * @return void
     */
    public function listAction()
    {
        $services = $this->serviceRepository->findAll();
        $this->view->assign('services', $services);
    }
}
