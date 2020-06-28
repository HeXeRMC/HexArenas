<?php

namespace HexArenas;

use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\item\Item;
use pocketmine\level\Position;
use pocketmine\item\ItemFactory;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $fistworld = $this->getConfig()->get("FistWorld");
        $this->getServer()->loadLevel("$fistworld");
        $gappleworld = $this->getConfig()->get("GappleWorld");
        $this->getServer()->loadLevel("$gappleworld");
        $nodebuffworld = $this->getConfig()->get("NodebuffWorld");
        $this->getServer()->loadLevel("$nodebuffworld");
        $comboworld = $this->getConfig()->get("ComboWorld");
        $this->getServer()->loadLevel("$comboworld");
        $sumoworld = $this->getConfig()->get("SumoWorld");
        $this->getServer()->loadLevel("$sumoworld");
        $this->saveDefaultConfig();
    }

    public function onCommand(CommandSender $sender, Command $cmd, String $label, array $args) : bool{
		switch($cmd->getName()){
                case "fist":
                    if($sender instanceof Player){
        
         $fistworld = $this->getConfig()->get("FistWorld");
         $fistmsg = $this->getConfig()->get("FistMsg");
         $fistlevel = $sender->getServer()->getLevelByName($fistworld);
         $fistcommand = $this->getConfig()->get("FistCommand");
         $this->targetLevel = $fistlevel;
         $sender->teleport($this->targetLevel->getSpawnLocation());
         $sender->getInventory()->clearAll();
         $sender->getArmorInventory()->clearAll();
         $sender->getCursorInventory()->clearAll();
         $sender->setHealth(20);
         $sender->removeAllEffects();
         $this->getServer()->dispatchCommand($sender, $fistcommand);
         $sender->sendMessage($fistmsg);
          }
					break;
                case "nodebuff":
                    if($sender instanceof Player){
        
         $nodebuffworld = $this->getConfig()->get("NodebuffWorld");
         $nodebuffmsg = $this->getConfig()->get("NodebuffMsg");
         $nodebufflevel = $sender->getServer()->getLevelByName($nodebuffworld);
         $nodebuffcommand = $this->getConfig()->get("NodebuffCommand");
         $this->targetLevel = $nodebufflevel;
         $sender->teleport($this->targetLevel->getSpawnLocation());
         $sender->getInventory()->clearAll();
         $sender->getArmorInventory()->clearAll();
         $sender->getCursorInventory()->clearAll();
         $sender->setHealth(20);
         $sender->removeAllEffects();
         $this->getServer()->dispatchCommand($sender, $nodebuffcommand);
         $sender->sendMessage($nodebuffmsg);
          }
					break;
                case "combo":
                    if($sender instanceof Player){
        
         $comboworld = $this->getConfig()->get("ComboWorld");
         $combomsg = $this->getConfig()->get("ComboMsg");
         $combolevel = $sender->getServer()->getLevelByName($comboworld);
         $combocommand = $this->getConfig()->get("ComboCommand");
         $this->targetLevel = $combolevel;
         $sender->teleport($this->targetLevel->getSpawnLocation());
         $sender->getInventory()->clearAll();
         $sender->getArmorInventory()->clearAll();
         $sender->getCursorInventory()->clearAll();
         $sender->setHealth(20);
         $sender->removeAllEffects();
         $this->getServer()->dispatchCommand($sender, $combocommand);
         $sender->sendMessage($combomsg);
          }
					break;
                case "sumo":
                    if($sender instanceof Player){
        
         $sumoworld = $this->getConfig()->get("SumoWorld");
         $sumomsg = $this->getConfig()->get("SumoMsg");
         $sumolevel = $sender->getServer()->getLevelByName($sumoworld);
         $sumocommand = $this->getConfig()->get("SumoCommand");
         $this->targetLevel = $sumolevel;
         $sender->teleport($this->targetLevel->getSpawnLocation());
         $sender->getInventory()->clearAll();
         $sender->getArmorInventory()->clearAll();
         $sender->getCursorInventory()->clearAll();
         $sender->setHealth(20);
         $sender->removeAllEffects();
         $this->getServer()->dispatchCommand($sender, $sumocommand);
         $sender->sendMessage($sumomsg);
          }
					break;
                case "gapple":
                    if($sender instanceof Player){
        
         $gappleworld = $this->getConfig()->get("GappleWorld");
         $gapplemsg = $this->getConfig()->get("GappleMsg");
         $gapplelevel = $sender->getServer()->getLevelByName($gappleworld);
         $gapplecommand = $this->getConfig()->get("GappleCommand");
         $this->targetLevel = $gapplelevel;
         $sender->teleport($this->targetLevel->getSpawnLocation());
         $sender->getInventory()->clearAll();
         $sender->getArmorInventory()->clearAll();
         $sender->getCursorInventory()->clearAll();
         $sender->setHealth(20);
         $sender->removeAllEffects();
         $this->getServer()->dispatchCommand($sender, $gapplecommand);
         $sender->sendMessage($gapplemsg);
          }
					break;
       }
		return true;
  }
}