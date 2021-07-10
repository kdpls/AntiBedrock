# AntiBedrock

![Discord](https://img.shields.io/discord/856281149503963166?style=flat-square)

A PocketMine-MP plugin to prevent players from breaking bedrock on Creative mode.

## How does it work?

This plugin cancels `BreakBrockEvent` if a player tries breaking bedrock on Creative mode and (possibly) other gamemodes. The player can still break bedrock if the player has the `antibedrock.bypass` permission, which is default to `op` players.

To prevent players from glitching the bedrock breaking cancelling mechanism in order to pass through bedrock, this plugin teleports players 2 blocks above before the `BreakBrockEvent` gets cancelled so the server will have enough time to cancel the event.

## Downloads

- Stable version (Recommended for most users): [Latest](https://github.com/KygekDev/AntiBedrock/releases/latest) | [All releases](https://github.com/KygekDev/AntiBedrock/releases)
- Build version (Only recommended for advanced users): [Poggit CI](https://poggit.pmmp.io/ci/KygekDev/AntiBedrock/~)

## Info

This plugin is made by KygekDev and licensed under [GPL-3.0](/LICENSE).

- Please [submit an issue](https://github.com/KygekDev/AntiBedrock/issues) if you want to give suggestions or report bugs.
- Join [KygekDev Community Discord server](https://discord.gg/TstDS9jZf7) for latest news from KygekDev and support from KygekDev or its members.