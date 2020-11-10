<?php

namespace MulkiAqi192\StaffJoin;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase as pl;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class main extends pl implements Listener {

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();

		if($player->hasPermission("joinstaff.msg")){
			$this->getServer()->broadcastMessage("§7[§bStaff§7]" . $player->getName() . " §ehas joined the server");
		}
	}


}