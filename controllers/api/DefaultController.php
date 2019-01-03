<?php
namespace kouosl\dosyayonetim\controllers\api;


/**
 * Default controller for the `dosyayonetim` module
 */
class DefaultController extends \kouosl\base\controllers\api\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
