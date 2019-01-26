<?php

namespace RedcatEditor\Controller;
use RedcatEditor\RedcatEditor;
use Thelia\Controller\Admin\BaseAdminController;
use Thelia\Core\Event\Cache\CacheEvent;
use Thelia\Core\Event\TheliaEvents;
use Thelia\Core\HttpFoundation\Response;

class RedcatEditorController extends BaseAdminController
{

    public function saveAction()
    {
        $request = $this->getRequest();
        $content = $request->request->get('content');

        $file = RedcatEditor::getScriptPath();

        try {
            @file_put_contents($file, $content);
            $this->dispatch(
                TheliaEvents::CACHE_CLEAR,
                new CacheEvent(THELIA_WEB_DIR."assets")
            );
            return new Response(null, 200);

        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return new Response(null, 500);
        }

    }

    public function readAction()
    {
        $file = RedcatEditor::getScriptPath();

        return new Response(file_get_contents($file), 200);
    }
}