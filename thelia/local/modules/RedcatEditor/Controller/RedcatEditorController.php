<?php

namespace RedcatEditor\Controller;
use RedcatEditor\RedcatEditor;
use Thelia\Controller\Admin\BaseAdminController;
use Thelia\Core\Event\Cache\CacheEvent;
use Thelia\Core\Event\TheliaEvents;


class RedcatEditorController extends BaseAdminController
{

    public function saveAction()
    {
        $request = $this->getRequest();
        $content = $request->request->get('content');

        $errors = $this->readFileErrors($file = RedcatEditor::getScriptPath());
        // If the file
        if (empty($errors) || (1 === count($errors) && $errors[0] === "file_not_readable")) {
            $errorMessage = null;
            try {

                $saveReturn = @file_put_contents($file, $content);
                if (false === $saveReturn) {
                    $errorMessage = "An unknown error happened while saving the file";
                } else {
                    $this->dispatch(
                        TheliaEvents::CACHE_CLEAR,
                        new CacheEvent(THELIA_WEB_DIR."assets")
                    );
                }
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
            if (null !== $errorMessage) {
                $this->getParserContext()->set("error_message", $errorMessage);
            } else {
                $this->getParserContext()->set("success", true);
            }
        }
    }
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
    }
}