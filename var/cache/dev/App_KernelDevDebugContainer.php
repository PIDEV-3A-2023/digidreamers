<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQkKfEg2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQkKfEg2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQkKfEg2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQkKfEg2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQkKfEg2\App_KernelDevDebugContainer([
    'container.build_hash' => 'QkKfEg2',
    'container.build_id' => 'f675d4a3',
    'container.build_time' => 1680123245,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQkKfEg2');
