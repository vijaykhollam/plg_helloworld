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

		// Determine the appropriate greeting message based on the time of day
		if ($hour < 12) {
			// Morning: Set greeting to "Good morning!"
			$greeting = 'Good morning!';
		} elseif ($hour < 18) {
			// Afternoon: Set greeting to "Good afternoon!"
			$greeting = 'Good afternoon!';
		} else {
			// Evening: Set greeting to "Good evening!"
			$greeting = 'Good evening!';
		}

		// Log the selected greeting message with a custom plugin identifier
		JLog::add($greeting . ' Hello from the HelloWorld Plugin.', Log::INFO, 'plg_system_helloworld');

		// Example of string manipulation: replace "Hello" with "Hi" in a sample message
		$message = str_replace('Hello', 'Hi', 'Hello from Joomla Plugin');
		
		// Log the modified message at DEBUG level for troubleshooting
		JLog::add('Modified Message: ' . $message, Log::DEBUG, 'plg_system_helloworld');
    }
}
