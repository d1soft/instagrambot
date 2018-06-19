<?php 

namespace app\services;

use Yii;

class InstagramService 
{
	
	private $instagramApi;
	
	public function __construct()
	{
		\InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
		$this->instagramApi = new \InstagramAPI\Instagram(true, true);
	}
	
	public function login($account)
	{
		$proxy = $account->getProxyGuzzleFormat();	
		
		$this->instagramApi->setProxy($proxy);
		try 
		{
			$this->instagramApi->login($account->username, $account->password);
			return true;
		} 
		catch (\InstagramAPI\InstagramException $e)
		{
			Yii::trace($e->getMessage());
			return false;
		}
	}
	
	public function addComment($mediaId, $text)
	{
		try 
		{
			return $this->instagramApi->media->comment($mediaId, $text);
		} 
		catch (\InstagramAPI\InstagramException $e)
		{
			Yii::trace($e->getMessage());
			return false;
		}
	}

	public function getFeed()
	{
		try 
		{
			$timelineFeed = $this->instagramApi->timeline->getTimelineFeed();
			return $timelineFeed->getFeedItems();
		} 
		catch (\InstagramAPI\InstagramException $e)
		{
			Yii::trace($e->getMessage());
			return false;
		}
	}
}

?>