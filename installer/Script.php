<?php

declare(strict_types=1);

namespace Installer;

use Composer\Script\Event;

class Script
{
    public static function install(Event $event)
    {
        $installer = new OptionalPackages($event->getIO(), $event->getComposer());

        $installer->io->write('<info>正在创建 自定义插件，请根据以下提示进行配置</info>');

        $installer->setUpComposerJson();
        $installer->mkdir();
        $installer->removeDevDependencies();
        $installer->promptForOptionalPackages();
        $installer->updateRootPackage();
        $installer->removeInstallerFromDefinition();
        $installer->finalizePackage();
    }

    public static function cleanUp(Event $event)
    {
        $installer = new OptionalPackages($event->getIO(), $event->getComposer());
        $installer->cleanUp();
        $installer->io->write('<info>恭喜，自定义插件创建成功！</info>');

    }
}