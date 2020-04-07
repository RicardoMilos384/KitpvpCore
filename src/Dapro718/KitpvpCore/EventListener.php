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
      $tile = $player->getLevel()->getTile($block);
      $player->sendMessage("Event Activated");
#      $tile->setLine(0, "Hi Feather", true);
#      $tile->setLine(1, "Hi Feather", true);
#      $tile->setLine(2, "Hi Feather", true);
#      $tile->setLine(3, "Hi Feather", true);
      $tile->setText("Hello", "Feather", "Im your worst", "nightmare");
     
  }
}
