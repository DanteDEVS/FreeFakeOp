<?php 

namespace DanteDev\Op;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Command extends Command{
  
  public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
      switch($command->getName()){
          case "op":
            $sender->sendMessage("[Server] Hello, You have earned Op!");

            return true;
        default:
            throw new \AssertionError("This line will never be executed");
  }
}
    
