<?php

namespace GameMode;

use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\event;
use pocketmine\plugin\PluginBase;

class main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info("GameMode by GeistFan");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args):bool
    {
        switch($cmd)
        {
            case "gm0":
            if($sender->hasPermission("pocketmine.command.gamemode"))
            {
                $sender->setGamemode(0);
            }
            break;
            case "gm1":
            if($sender->hasPermission("pocketmine.command.gamemode"))
            {
                $sender->setGamemode(1);
            }
            break;
            case "gm2":
            if($sender->hasPermission("pocketmine.command.gamemode"))
            {
                $sender->setGamemode(2);
            }
            break;
            case "gm3":
            if($sender->hasPermission("pocketmine.command.gamemode"))
            {
                $sender->setGamemode(3);
            }
            break;
        }return true;
    }
}
