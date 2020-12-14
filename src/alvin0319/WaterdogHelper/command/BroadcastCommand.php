<?php

declare(strict_types=1);

namespace alvin0319\WaterdogHelper\command;

use alvin0319\WaterdogHelper\WaterdogHelper;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\command\utils\InvalidCommandSyntaxException;

use function count;

class BroadcastCommand extends PluginCommand{

	public function __construct(){
		parent::__construct("broadcast", WaterdogHelper::getInstance());
		$this->setPermission("waterdoghelper.command.broadcast");
		$this->setDescription("Broadcasts a message");
		$this->setUsage("/broadcast <message>");
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args) : bool{
		if(!$this->testPermission($sender)){
			return false;
		}
		if(count($args) < 1){
			throw new InvalidCommandSyntaxException();
		}
		// TODO
	}
}