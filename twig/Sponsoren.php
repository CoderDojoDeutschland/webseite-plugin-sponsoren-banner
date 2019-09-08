<?php

namespace Grav\Plugin;

class SponsorenTwigExtension extends \Twig_Extension
{
    public function __construct($sponsors)
    {
        $this->sponsors = $sponsors;
    }

    public function getName()
    {
        return 'SponsorenTwigExtension';
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('sponsoren', [$this, 'renderSponsoren'], [
                'is_safe' => ['html'],
                'needs_environment' => true // Tell twig we need the environment
            ])
        ];
    }
    public function renderSponsoren(\Twig_Environment $env)
    {
        return $env->render("partials/sponsors.html.twig", ['sponsors' => $this->sponsors]);
    }
}
