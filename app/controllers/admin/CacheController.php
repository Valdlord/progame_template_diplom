<?php


namespace app\controllers\admin;


use mvs\App;
use mvs\Cache;

class CacheController extends AppController
{

    public function indexAction()
    {
        $title = 'Управление кэшем';
        $this->setMeta("Админка :: {$title}");
        $this->set(compact('title'));
    }

    public function deleteAction()
    {
        $langs = App::$app->getProperty('languages');
        $cache_key = get('cache', 's');
        $cache = Cache::getInstance();
        if ($cache_key == 'category') {
            foreach ($langs as $lang => $item) {
                $cache->delete("progame_menu_{$lang}");
            }
        }
        if ($cache_key == 'page') {
            foreach ($langs as $lang => $item) {
                $cache->delete("progame_page_menu_{$lang}");
            }
        }
        $_SESSION['success'] = 'Выбранный кэш удален';
        redirect();
    }

}