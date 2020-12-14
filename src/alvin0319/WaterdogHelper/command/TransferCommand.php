<?php

declare(strict_types=1);

namespace alvin0319\WaterdogHelper\command;

use alvin0319\WaterdogHelper\WaterdogHelper;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\command\utils\InvalidCommandSyntaxException;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

use function array_shift;
use function count;
use function trim;

class TransferCommand extends PluginCommand{

	public function __construct(){
		parent::__construct("transfer", WaterdogHelper::getInstance());
		$this->setPermission("waterdoghelper.command.transfer");
		$this->setDescription("Transfer the another server.");
		$this->setUsage("/transfer <server> <player>");
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args) : bool{
		if(!$sender instanceof Player){
			if(count($args) < 2){
				throw new InvalidCommandSyntaxException();
			}
			[$server, $player] = $args;
			if(trim($server ?? "") === "" || trim($player ?? "") === ""){
				throw new InvalidCommandSyntaxException();
			}
			if(($player = $sender->getServer()->getPlayer($player)) === null){
				$sender->sendMessage(TextFormat::RED . "Player not found.");
				return false;
			}
			WaterdogHelper::getInstance()->transfer($player, $server);
			$sender->sendMessage("Player {$player->getName()} transferred successfully.");
		}else{
			if(count($args) < 1){
				throw new InvalidCommandSyntaxException();
			}
			$server = array_shift($args);
			if(trim($server ?? "") === ""){
				throw new InvalidCommandSyntaxException();
			}
			WaterdogHelper::getInstance()->transfer($sender, $server);
			$sender->sendMessage("Transferring you to {$server}...");
		}
		return true;
	}
}