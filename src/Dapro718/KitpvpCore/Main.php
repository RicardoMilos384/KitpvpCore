<?php

declare(strict_types=1);

namespace Dapro718\KitpvpCore;
  
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\Server;
use Dapro718\KitpvpCore\utils\Data;

class Main extends PluginBase implements Listener{
  
  

  public function onLoad(): void {
      $this->getLogger()->info("KitPvP Loaded");
      $nOverworld_1 = 0
      $nOverworld_2 = 0
      $nOverworld_3 = 0
      $nDesert_1 = 0
      $nDesert_2 = 0
      $nDesert_3 = 0
      $nOcean_1 = 0
      $nOcean_2 = 0
      $nOcean_3 = 0
      $nJungle_1 = 0
      $nJungle_2 = 0
      $nJungle_3 = 0
      $nCity_1 = 0
      $nCity_2 = 0
      $nCity_3 = 0
      $nFuture_1 = 0
      $nFuture_2 = 0
      $nFuture_3 = 0
      $nAlien_1 = 0
      $nAlien_2 = 0
      $nAlien_3 = 0
  }
  
  
  public function onEnable() {
      $this->getLogger()->info("KitPvP Enabled");
  }
  
  
  public function onDisable(): void {
      $this->getLogger()->info("KitPvP Disabled");
  }
}
