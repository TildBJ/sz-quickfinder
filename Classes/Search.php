<?php
declare(strict_types = 1);

namespace Sunzinet\SzQuickfinder;

/**
 * Interface Search
 * @package Sunzinet\SzQuickfinder
 */
interface Search
{
    /**
     * @param TyposcriptSettings $settings
     * @return void
     */
    public function injectSettings(TyposcriptSettings $settings);

    /**
     * @return TyposcriptSettings
     */
    public function getSettings();
}
