<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

class HeaderCheck
{
	function js_loaded($script_name)
	{
		// UIkit check point
		if($script_name == 'uikit'){
			$app            	= JFactory::getApplication();
			$getTemplateName  	= $app->getTemplate('template')->template;
			
			if (strpos($getTemplateName,'yoo') !== false) {
				return true;
			}
		}
		
		$document 	=& JFactory::getDocument();
		$head_data 	= $document->getHeadData();
		foreach (array_keys($head_data['scripts']) as $script) {
			if (stristr($script, $script_name)) {
				return true;
			}
		}

		return false;
	}
	
	function css_loaded($script_name)
	{
		// UIkit check point
		if($script_name == 'uikit'){
			$app            	= JFactory::getApplication();
			$getTemplateName  	= $app->getTemplate('template')->template;
			
			if (strpos($getTemplateName,'yoo') !== false) {
				return true;
			}
		}
		
		$document 	=& JFactory::getDocument();
		$head_data 	= $document->getHeadData();
		
		foreach (array_keys($head_data['styleSheets']) as $script) {
			if (stristr($script, $script_name)) {
				return true;
			}
		}

		return false;
	}
}