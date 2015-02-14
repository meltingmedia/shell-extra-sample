<?php namespace ThirdParty;

use MODX\Shell\CommandRegistrar;

/**
 * Sample script to self register commands in MODX Shell
 */

class RegisterCommands extends CommandRegistrar
{
    public static $namespace = 'ThirdParty';
}
