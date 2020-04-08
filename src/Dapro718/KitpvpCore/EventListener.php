<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\tile\Sign;
use pocketmine\block\SignChangeEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\Player;

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
          $tile->setLine(0, "Hi", true);
          $tile->setLine(1, "I'm plugin", true);
          $tile->setLine(2, "I work", true);
          $tile->setLine(3, "Tell Dapro", true);
        }
      }
  }
  
  public function onPlayerDeath(PlayerDeathEvent $event) {
     
  }
}
