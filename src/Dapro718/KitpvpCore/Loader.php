<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;
  
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\player;
use pocketmine\block\WallSign;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\tile\Sign;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\Plugin;
use pocketmine\Server;

class Main extends PluginBase implements Listener{

  public function onLoad(): void {
      $this->getLogger()->info("KitPvP Loaded");
  }
  
  
  public function onEnable() {
      $this->getLogger()->info("KitPvP Loaded");
      $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
  }
  
  
  public function onDisable(): void {
      $this->getLogger()->info("KitPvP Disabled");
  }
  
  
  public function onInteract(PlayerInteractEvent $event) {
  		$block = $event->getBlock();
		  $player = $event->getPlayer();
		  $sign = $player->getLevel()->getTile($block);
      $event->setLine(0, "Test1");
      $event->setLine(1, "Test2");
      $event->setLine(2, "Test3");
      $event->setLine(3, "Test4");
  }
}
