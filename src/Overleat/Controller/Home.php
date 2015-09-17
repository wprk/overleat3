<?php

/*
 * This file is part of the Overleat Care Home Website package.
 *
 * (c) Will Parker <will@wipar.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Overleat\Controller;

class Home extends \SlimController\SlimController
{
    public function indexAction()
    {
        $this->render('partials/header', array(
            'active' => 'home',
        ));
        $this->render('home/index', array(
            'someVar' => date('c'),
        ));
        $this->render('partials/footer', array(
            'copyrightYear' => date('Y'),
        ));
    }

    public function activitiesAction()
    {
        $this->render('partials/header', array(
            'active' => 'activities',
        ));
        $this->render('home/activities', array(
            'someVar' => date('c'),
        ));
        $this->render('partials/footer', array(
            'copyrightYear' => date('Y'),
        ));
    }

    public function mealsAction()
    {
        $this->render('partials/header', array(
            'active' => 'meals',
        ));
        $this->render('home/meals', array(
            'someVar' => date('c'),
        ));
        $this->render('partials/footer', array(
            'copyrightYear' => date('Y'),
        ));
    }

    public function accomodationAction()
    {
        $this->render('partials/header', array(
            'active' => 'accomodation',
        ));
        $this->render('home/accomodation', array(
            'someVar' => date('c'),
        ));
        $this->render('partials/footer', array(
            'copyrightYear' => date('Y'),
        ));
    }

    public function respiteAction()
    {
        $this->render('partials/header', array(
            'active' => 'respite',
        ));
        $this->render('home/respite', array(
            'someVar' => date('c'),
        ));
        $this->render('partials/footer', array(
            'copyrightYear' => date('Y'),
        ));
    }

    public function whyAction()
    {
        $this->render('partials/header', array(
            'active' => 'why',
        ));
        $this->render('home/why', array(
            'someVar' => date('c'),
        ));
        $this->render('partials/footer', array(
            'copyrightYear' => date('Y'),
        ));
    }
}
