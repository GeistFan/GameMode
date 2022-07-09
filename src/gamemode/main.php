<?php

namespace GameMode;

use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event;
use pocketmine\plugin\PluginBase;
use pocketmine\player\GameMode;
use pocketmine\Player;

class main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getLogger()->info("GameMode by GeistFan");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args):bool
    {
        switch($cmd)
        {
            case "gm0":
            if($sender->hasPermission("gm.cmd"))
            {
                $sender->setGamemode(GameMode::SURVIVAL());
            }
            break;
            case "gm1":
            if($sender->hasPermission("gm.cmd"))
            {
                $sender->setGamemode(GameMode::CREATIVE());
            }
            break;
            case "gm2":
            if($sender->hasPermission("gm.cmd"))
            {
                $sender->setGamemode(GameMode::ADVENTURE());
            }
            break;
            case "gm3":
            if($sender->hasPermission("gm.cmd"))
            {
                $sender->setGamemode(GameMode::SPECTATOR());
            }
            break;
        }return true;
    }
}
