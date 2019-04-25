<?php
use Cake\Event\EventManager;

EventManager::instance()
    ->on(
        'Controller.initialize',
        function (Cake\Event\Event $event) {
            $controller = $event->getSubject();
            if ($controller->components()->has('RequestHandler')) {
                $controller->RequestHandler->setConfig('viewClassMap.pdf', 'CakePdf.Pdf');
            }
        }
    );
