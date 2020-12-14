<?php

declare(strict_types=1);

namespace alvin0319\WaterdogHelper\command;

use alvin0319\WaterdogHelper\WaterdogHelper;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\utils\TextFormat;

class GoLobbyCommand extends PluginCommand{

	public function __construct(){
		parent::__construct("golobby", WaterdogHelper::getInstance());
		$this->setDescription("Send all player to lobby");
		$this->setPermission("waterdoghelper.command.golobby");
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args){
		if(!$this->testPermission($sender)){
			return false;
		}
		$sender->sendMessage(TextFormat::GREEN . "Transferring...");
		foreach($sender->getServer()->getOnlinePlayers() as $player){
			WaterdogHelper::getInstance()->transfer($player, WaterdogHelper::getInstance()->getConfig()->get("lobby_name", "lobby"));
		}
		return true;
	}
}