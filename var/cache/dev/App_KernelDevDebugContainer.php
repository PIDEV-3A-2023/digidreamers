<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDi5ouOx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDi5ouOx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDi5ouOx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDi5ouOx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDi5ouOx\App_KernelDevDebugContainer([
    'container.build_hash' => 'Di5ouOx',
    'container.build_id' => '40c763bc',
    'container.build_time' => 1680811011,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDi5ouOx');
