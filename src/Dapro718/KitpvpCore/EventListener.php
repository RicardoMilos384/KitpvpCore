<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\tile\Sign;
use pocketmine\block\SignChangeEvent;

class EventListener implements Listener {

  public function onInteract(PlayerInteractEvent $event) {
      $block = $event->getBlock();
      $player = $event->getPlayer();
      $sign = $player->getLevel()->getTile($block);
      $sign->setLine(0, "Test1");
      $sign->setLine(1, "Test2");
      $sign->setLine(2, "Test3");
      $sign->setLine(3, "Test4");
  }
}
