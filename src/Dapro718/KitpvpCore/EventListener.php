<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\tile\Sign;
use pocketmine\block\SignChangeEvent;
use pocketmine\level\Level;
use pocketmine\tile\Tile;

class EventListener implements Listener {
  
  public function __construct($plugin) {
        $this->plugin = $plugin;
    }
  
  public function onInteract(PlayerInteractEvent $event) {
      $block = $event->getBlock();
      $player = $event->getPlayer();
      $tile = $player->getLevel()->getTile($block);
      $player->sendMessage("Event Activated");
      $tile->setLine(0, "Hi", true);
      $tile->setLine(1, "I'm plugin", true);
      $tile->setLine(2, "I work", true);
      $tile->setLine(3, "Tell Dapro", true);
  }
}
