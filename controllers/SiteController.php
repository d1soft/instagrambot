<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\services\InstagramService;
use app\models\Account;


class SiteController extends Controller
{
	private $instagramService;
	
	public function __construct($id, $module, InstagramService $instagramService, $config = [])
	{
		$this->instagramService = $instagramService;
		parent::__construct($id, $module, $config = []);
	}	

	public function actionInstagram($id)
	{
		$account = Account::find()->where(['id' => $id])->one();
		
		if($this->instagramService->login($account)){
			$feed = $this->instagramService->getFeed();
			
			$commentedMediaId = $feed[0]->getMediaOrAd()->getId();
			
			Yii::trace($commentedMediaId, 'Commented random media');
			
			$result = $this->instagramService->addComment($commentedMediaId, 'Just do it');
			
			Yii::trace(var_dump($result)));
			
		}
		
		return $this->render('index');
	}
}
