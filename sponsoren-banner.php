<?php

namespace Grav\Plugin;

use Grav\Common\Plugin;

/**
 * Class SponsorenBannerPlugin
 * @package Grav\Plugin
 */
class SponsorenBannerPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }
    }

    public function onTwigExtensions()
    {
        if ($this->isAdmin()) {
            return;
        }
        require_once(__DIR__ . '/twig/Sponsoren.php');

        $sponsors = json_decode($this->config->get('plugins.sponsoren-banner.text_var'));
        return $this->grav['twig']->twig->addExtension(new SponsorenTwigExtension($sponsors));
    }
}
