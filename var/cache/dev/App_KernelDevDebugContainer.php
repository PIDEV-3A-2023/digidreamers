<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR4J0zDn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR4J0zDn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerR4J0zDn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerR4J0zDn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerR4J0zDn\App_KernelDevDebugContainer([
    'container.build_hash' => 'R4J0zDn',
    'container.build_id' => '3d8a05e5',
    'container.build_time' => 1682381300,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerR4J0zDn');
