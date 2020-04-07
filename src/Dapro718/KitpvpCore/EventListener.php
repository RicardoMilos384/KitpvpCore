<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\tile\Sign;
use pocketmine\block\SignChangeEvent;

class EventListener extends Sign implements Listener {
  
  $prefix = "§l§8[§1KitPvP§8]§r";

  public function onInteract(PlayerInteractEvent $event) {
      $block = $event->getBlock();
      $player = $event->getPlayer();
      $tile = $player->getLevel()->getTile($block);
      if(!($tile instanceof Sign)) {
        $tile->setLine(0, "Hi Feather");
        $tile->setLine(1, "Hi Feather");
        $tile->setLine(2, "Hi Feather");
        $tile->setLine(3, "Hi Feather");
      }
  }
}
