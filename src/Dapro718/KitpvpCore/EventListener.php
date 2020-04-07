<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\tile\Sign;
use pocketmine\block\SignChangeEvent;
use _64FF00\PurePerms\data\UserDataManager

class EventListener extends Sign implements Listener {
  
  $prefix = "§l§8[§1KitPvP§8]§r"

  public function onInteract(PlayerInteractEvent $event) {
      $block = $event->getBlock();
      $player = $event->getPlayer();
      $tile = $player->getLevel()->getTile($block);
      $group = getGroup($player)
      if(!($tile instanceof Sign)) {
        return;
      } elseif $group === "Leather" or $group === "Chain" or $group === "Iron" {
        
        
      }
  }
}
