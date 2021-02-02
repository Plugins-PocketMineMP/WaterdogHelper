# WaterdogHelper
A PocketMine-MP plugin that allows control Waterdog Proxy.

**IMPORTANT**: This is the updated-version, if you find legacy WaterdogHelper, go to [legacy](https://github.com/alvin0319/WaterdogHelper/tree/legacy) branch.

# API
```php
$api = \alvin0319\WaterdogHelper\WaterdogHelper::getInstance();

$player = $api->getServer()->getPlayerExact("my_player_name");

if($player instanceof \pocketmine\Player){
    // send message
    $api->sendMessage($player, "message description");
}
```

# Commands
|name|description|usage|
|---|---|---|
|/golobby|Send the all players to lobby server|/golobby|
|/transfer|Transfer the player|/transfer <server> <player>|