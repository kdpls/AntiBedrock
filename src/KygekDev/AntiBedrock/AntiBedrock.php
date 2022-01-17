<?php

/*
 * Prevent players from breaking bedrock on Creative mode
 * Copyright (C) 2021-2022 KygekDev
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace KygekDev\AntiBedrock;

use pocketmine\block\VanillaBlocks;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class AntiBedrock extends PluginBase implements Listener {

    protected function onEnable() : void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onBreak(BlockBreakEvent $event) {
        if ($event->isCancelled()) return;

        $player = $event->getPlayer();
        if ($player->hasPermission("antibedrock.bypass")) return;

        if ($event->getBlock()->isSameType(VanillaBlocks::BEDROCK())) {
            // Prevents player from glitching the bedrock breaking cancelling mechanism in order to pass through bedrock
            $player->teleport($player->getPosition()->add(0, 2, 0));
            $event->cancel();
        }
    }

}
