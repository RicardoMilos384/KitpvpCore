<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\tile\Sign;
use pocketmine\block\SignChangeEvent;

class EventListener extends Sign implements Listener {

  public function onInteract(PlayerInteractEvent $event) {
      $block = $event->getBlock();
      $player = $event->getPlayer();
      if(!($tile instanceof Sign)) {
        return;
      } else {
        $tile->setLine(0, "Test1", true);
        $tile->setLine(1, "Test2", true);
        $tile->setLine(2, "Test3", true);
        $tile->setLine(3, "Test4", true);
      }
  }
}
