<?php
namespace Kanboard\Plugin\TaskSwimlaneChangeLessThanDays;
use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\TaskSwimlaneChangeLessThanDays\Action\TaskSwimlaneChangeLessThanDays;
class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new TaskSwimlaneChangeLessThanDays($this->container));
    }
    public function getPluginName()
    {
        return 'TaskSwimlaneChangeLessThanDays';
    }

    public function getPluginDescription()
    {
        return t('Automatically change swimlanes when a tasks due date is LESS than a certain number of days away');
    }

    public function getPluginAuthor()
    {
        return 'David Morlitz';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/dmorlitz/kanboard-TaskSwimlaneChangeLessThanDays';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.44';
    }
}
