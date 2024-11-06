<?php
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Log\Log;
use Joomla\CMS\Factory;

class PlgSystemHelloworld extends CMSPlugin
{
    public function onAfterInitialise()
    {
        // Get the current hour in 24-hour format (0-23)
        $hour = (int) date('H');
        $greeting = '';
        $unusedVar = "This variable is not used";  // Unused variable

        // Intentional error: Reversed logic for time of day
        if ($hour > 12) { // Should be < 12
            $greeting = 'Good morning!';
        } elseif ($hour < 18) {
            $greeting = 'Good afternoon!';
        } else {
            $greeting = 'Good evening!';
        }

        // Missing namespace for JLog
        JLog::add($greeting . ' Hello from the HelloWorld Plugin.', Log::INVALID_LEVEL, 'plg_system_helloworld'); // Invalid log level

        // Example of string manipulation: replace "Hello" with "Hi" in a sample message
        $message = str_replace('Hello', 'Hi', 'Hello from Joomla Plugin')

        // Log the modified message at DEBUG level for troubleshooting
        JLog::add('Modified Message: ' . $message, Log::DEBUG, 'plg_system_helloworld');
    }
}
