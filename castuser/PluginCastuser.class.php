<?php

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginCastuser extends Plugin {

    public $aInherits = array(
         'module' => array(
            'ModuleText' => '_ModuleText',
    		'ModuleNotify' => '_ModuleNotify',
        ),      
	);

    // Активация плагина
    public function Activate() {
    	//TODO add all sql script
        return true;
    }

    // Деактивация плагина
    public function Deactivate(){

    	return true;
    }


    // Инициализация плагина
    public function Init() {    	
		return true;
    }
}
?>
