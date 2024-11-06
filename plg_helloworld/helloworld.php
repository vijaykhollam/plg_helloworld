<?php
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Log\Log;
use Joomla\CMS\Factory;

class PlgSystemHelloworld extends CMSPlugin
{
    public function onAfterInitialise()
    {
        // Get the current hour
        $hour = (int) date('H');
        $greeting = '';

        // Determine part of the day and set greeting message
        if ($hour < 12) {
            $greeting = 'Good morning!';
        } elseif ($hour < 18) {
            $greeting = 'Good afternoon!';
        } else {
            $greeting = 'Good evening!';
        }

        // Log the greeting message
        Log::add($greeting . ' Hello from the HelloWorld Plugin.', Log::INFO, 'plg_system_helloworld');

        // Example string manipulation
        $message = str_replace('Hello', 'Hi', 'Hello from Joomla Plugin');
        Log::add('Modified Message: ' . $message, Log::DEBUG, 'plg_system_helloworld');
    }
}
