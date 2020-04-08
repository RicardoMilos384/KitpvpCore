<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\tile\Sign;
use pocketmine\block\SignChangeEvent;

class EventListener implements Listener {
  
  public $plugin;
  
  public function __construct($plugin) {
        $this->plugin = $plugin;
    }
  
  public function onInteract(PlayerInteractEvent $event) {
      $block = $event->getBlock();
      $player = $event->getPlayer();
      $tile = $player->getLevel()->getTile($block);
      $player->sendMessage("Event Activated");
      if($event->getAction() === PlayerInteractEvent::RIGHT_CLICK_BLOCK) {
        if($tile instanceof Sign) {
          $event->setLine(0, "Hi", true);
          $event->setLine(1, "I'm plugin", true);
          $event->setLine(2, "I work", true);
          $event->setLine(3, "Tell Dapro", true);
        }
      }
  }
}
