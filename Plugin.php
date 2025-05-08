<?php

namespace Kanboard\Plugin\RenderPriority;

use Kanboard\Core\Plugin\Base;
// use Kanboard\Core\Translator;
use Kanboard\Plugin\RenderPriority\Helper\TaskHelperMod;


class Plugin extends Base
{
    public function initialize()
    {
        $this->helper->register(
            'task',
            '\Kanboard\Plugin\RenderPriority\Helper\TaskHelperMod'
        );
    }

    public function getPluginName()
    {
        return 'RenderPriority';
    }

    public function getPluginDescription()
    {
        return t('Represent the task priority on the card differently');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.27';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Tagirijus/RenderPriority';
    }
}
