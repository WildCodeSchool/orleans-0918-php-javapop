<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Picture;
use Model\GaleryManager;

/**
 * Class GaleryController
 *
 */
class GaleryController extends AbstractController
{


    /**
     * Display picture listing
     *
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function index()
    {
        $pictureManager = new GaleryManager($this->getPdo());
        $pictures = $pictureManager->selectAll('id', 'DESC');

        return $this->twig->render('Picture/galery.html.twig', ['pictures' => $pictures]);
    }

}
