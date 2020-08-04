<?php

declare(strict_types=1);

namespace Hrasek1000\RulesUI;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command; 
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{
    public function onLoad(){
        $this->getLogger()->info("Plugin Loading");
    }
    public function onEnable(){
        $this->getLogger()->info("Enabled Plugin");
        $this->saveResource("config.yml");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onDisable(){
        $this->getLogger()->info("Plugin Disabled");
    }
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
        $commandName = $command->getName();
        if($commandName === "rules"){
            $sender->sendMessage($this->getConfig()->get("Title"));
            $sender->sendMessage("---------------");
            $sender->sendMessage($this->getConfig()->get("Line1"));
            $sender->sendMessage($this->getConfig()->get("Line2"));
            $sender->sendMessage($this->getConfig()->get("Line3"));
            $sender->sendMessage($this->getConfig()->get("Line4"));
            $sender->sendMessage($this->getConfig()->get("Line5"));
            $sender->sendMessage($this->getConfig()->get("Line6"));
            $sender->sendMessage($this->getConfig()->get("Line7"));
            $sender->sendMessage($this->getConfig()->get("Line8"));
            $sender->sendMessage($this->getConfig()->get("Line9"));
            $sender->sendMessage($this->getConfig()->get("Line10"));            
        }
        return true;  
    } 
}
