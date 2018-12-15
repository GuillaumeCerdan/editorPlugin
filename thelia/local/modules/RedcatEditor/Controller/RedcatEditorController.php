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

    /*
    protected function readFileErrors($file)
    {
        $errors = array();
        if ((!is_file($file) && !@touch($file))) {
            $errors[] = "file_dont_exist";
        }
        if (is_file($file)) {
            if (!is_writable($file)) {
                $errors[] = "file_readonly";
            }
            if (!is_readable($file)) {
                $errors[] = "file_not_readable";
            }
        }
        if (is_dir($file)) {
            $errors[] = "file_is_directory";
        }
        return $errors;
    }*/
}