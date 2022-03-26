<?php

namespace DanteDev\Op;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
  
  public function onLoad(): void{
      $this->getLogger()->info("Loading FakeOP");
  }
  
  public function onEnable(): void{
      $this->getLogger()->info("Enabled FakeOP");
  }
  
  public function onLoad(): void{
      $this->getLogger()->info("Disabled FakeOP");
  }
}
