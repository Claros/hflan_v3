<?php

namespace hflan\PhotosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PublicController extends Controller
{
    /**
     * @Template
     */
    public function indexAction()
    {
        return array();
    }
}