<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

//set tokens
$settings = array(
    'oauth_access_token' => "337568622-GXvhtCEnq6D0FImnwXmaiUtKMDEj2UKMOF0pCuLO",
    'oauth_access_token_secret' => "0IANdstX6sbj01BNViKKjukBAM37Ilz0vJa7WHC4fPvrV",
    'consumer_key' => "YWFZSU5Q6rCbTjjDkY1R7NW3A",
    'consumer_secret' => "NNKAGTfQMEe7L1Z7YOaKHPa8moMtoPXZwkfsfpaSEK3E9HSXl5"

$url = 'https://api.twitter.com/1.1/statuses/kkirr2.json';
$getfield = '?username=kkirr2&count=3';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

?>
