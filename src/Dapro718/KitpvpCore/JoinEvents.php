<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;

use pocketmine\Player;
use Dapro718\KitpvpCore\utils\arena_player_count;

class JoinEvents {
  public $prefix = "§l§8[§1KitPvP§8]§r ";
  
  public function joinOverworld($player, $playerLevel) {
    if($playerLevel === 3) {
      $nOverworld_3 += 1;
      $player->teleport(new Position(100, 125, 100, "world"));
      $player->sendMessage($prefix . "§aYou have joined the Overworld arena.");
      return $nOverworld_3;
    } elseif($playerLevel === 2) {
        $nOverworld_2 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Overworld arena.");
        return $nOverworld_2;
    } elseif($playerLevel === 1) {
        $nOverworld_1 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Overworld arena.");
        return $nOverworld_1;
    }
  }
  
  
  public function joinDesert($player, $playerLevel) {
    if($playerLevel === 3) {
      $nDesert_3 += 1;
      $player->teleport(new Position(100, 125, 100, "world"));
      $player->sendMessage($prefix . "§aYou have joined the Desert arena.");
      return $nDesert_3;
    } elseif($playerLevel === 2) {
        $nDesert_2 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Desert arena.");
        return $nDesert_2;
    } elseif($playerLevel === 1) {
        $nDesert_1 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Desert arena.");
        return $nDesert_1;
    }
  }
  
  
  public function joinOcean($player, $playerLevel) {
    if($playerLevel === 3) {
      $nOcean_3 += 1;
      $player->teleport(new Position(100, 125, 100, "world"));
      $player->sendMessage($prefix . "§aYou have joined the Ocean arena.");
      return $nOcean_3;
    } elseif($playerLevel === 2) {
        $nOcean_2 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Ocean arena.");
        return $nOcean_2;
    } elseif($playerLevel === 1) {
        $nOcean_1 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Ocean arena.");
        return $nOcean_1;
    }
  }
  
      
  public function joinJungle($player, $playerLevel) {
    if($playerLevel === 3) {
      $nJungle_3 += 1;
      $player->teleport(new Position(100, 125, 100, "world"));
      $player->sendMessage($prefix . "§aYou have joined the Jungle arena.");
      return $nJungle_3;
    } elseif($playerLevel === 2) {
        $nJungle_2 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Jungle arena.");
        return $nJungle_2;
    } elseif($playerLevel === 1) {
        $nJungle_1 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Jungle arena.");
        return $nJungle_1;
    }
  }
  
  
  public function joinCity($player, $playerLevel) {
    if($playerLevel === 3) {
      $nCity_3 += 1;
      $player->teleport(new Position(100, 125, 100, "world"));
      $player->sendMessage($prefix . "§aYou have joined the City arena.");
      return $nCity_3;
    } elseif($playerLevel === 2) {
        $nCity_2 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the City arena.");
        return $nCity_2;
    } elseif($playerLevel === 1) {
        $nCity_1 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the City arena.");
        return $nCity_1;
    }
  }
  
  
  public function joinFuture($player, $playerLevel) {
    if($playerLevel === 3) {
      $nFuture_3 += 1;
      $player->teleport(new Position(100, 125, 100, "world"));
      $player->sendMessage($prefix . "§aYou have joined the Future arena.");
      return $nFuture_3;
    } elseif($playerLevel === 2) {
        $nFuture_2 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Future arena.");
        return $nFuture_2;
    } elseif($playerLevel === 1) {
        $nFuture_1 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Future arena.");
        return $nFuture_1;
    }
  }
  

  public function joinOcean($player, $playerLevel) {
    if($playerLevel === 3) {
      $nAlien_3 += 1;
      $player->teleport(new Position(100, 125, 100, "world"));
      $player->sendMessage($prefix . "§aYou have joined the Alien arena.");
      return $nAlien_3;
    } elseif($playerLevel === 2) {
        $nAlien_2 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Alien arena.");
        return $nAlien_2;
    } elseif($playerLevel === 1) {
        $nAlien_1 += 1;
        $player->teleport(new Position(100, 125, 100, "world"));
        $player->sendMessage($prefix . "§aYou have joined the Alien arena.");
        return $nAlien_1;
    }
  }
