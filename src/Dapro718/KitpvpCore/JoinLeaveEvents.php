<?php

declare(strict_types=1);

namespace Dapro\KitpvpCore;

use pocketmine\Player;
use pocketmine\utils\config;
use Dapro718\Kitpvpcore\Main

class JoinEvents {

  public $prefix = "§l§8[§1KitPvP§8]§r";
  public $data

  public function joinArena($player, $playerLevel, $arena) {
    if($playerLevel === 3) {
      $player->sendMessage($prefix . "§aYou have joined the $arena arena.)
      $player->teleport(new Position($config->get($arena . $playerLevel . "-x", $config->get($arena . $playerLevel . "-y", $config->get($arena . $playerLevel . "-z")
      $data = new Config(KitpvpCore::getInstance()->getDataFolder() . "arenas.yml", Config::YAML);
      $data->set($arena . $playerLevel, $this->getArenaPlayerCount($playerLevel, $arena) + 1);
      $data->save();
    }
  }
  
  
  public function getArenaPlayerCount($playerLevel, $arena)
    $data = new Config(KitpvpCore::getInstance()->getDataFolder() . "arenas.yml", Config::YAML);
    return (int) $config->get($arena . $playerLevel);
}
      
