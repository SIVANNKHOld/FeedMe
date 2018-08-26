<?php

namespace FeedMe;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
	
	public function onEnable(){
        	$this->getLogger()->info("FeedMe by SIVANNKH has been enabled!");
    	}
    	public function onDisable(){
        	$this->getLogger()->info("FeedMe by SIVANNKH has been disabled!");
    	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			
			case "feedme":
				if($sender instanceof Player){
					
					if($sender->hasPermission("feedme.command")){
						$sender->setFood(20);
						$sender->sendMessage("You have been fed!");
					}
					
				}
			break;
			
		}
		return true;
	}
	
}
