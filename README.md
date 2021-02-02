# WaterdogHelper
A PocketMine-MP plugin that allows control Waterdog Proxy.

**THIS IS THE WaterdogHelper LEGACY VERSION**

**TO GET LATEST VERSION OF PLUGIN, GO TO MASTER BRANCH TO GET UPDATED PLUGIN** 

# API
```php
$api = \alvin0319\WaterdogHelper\WaterdogHelper::getInstance();

$player = $api->getServer()->getPlayerExact("my_player_name");

if($player instanceof \pocketmine\Player){
    // transfer player
    $api->transfer($player, "server_name");
    // send message
    $api->sendMessage($player, "message description");
}
```

# Commands
|name|description|usage|
|---|---|---|
|/golobby|Send the all players to lobby server|/golobby|
|/transfer|Transfer the player|/transfer <server> <player>|