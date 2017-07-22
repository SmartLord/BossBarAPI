<?php

/*
 * BossBarAPI
 * A plugin by XenialDan aka thebigsmileXD
 * http://github.com/thebigsmileXD/BossBarAPI
 * Sending the Bossbar independ from the Server software
 */

namespace xenialdan\BossBarAPI;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
	/** @var Main */
	private static $instance = null;

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public static function getInstance(){
		return self::$instance;
	}

	public function onLoad(){
		self::$instance = $this;
	}
}