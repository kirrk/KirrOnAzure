<?php require_once('TwitterAPIExchange.php');

//set tokens
$settings = array(
    'oauth_access_token' => "337568622-GXvhtCEnq6D0FImnwXmaiUtKMDEj2UKMOF0pCuLO",
    'oauth_access_token_secret' => "0IANdstX6sbj01BNViKKjukBAM37Ilz0vJa7WHC4fPvrV",
    'consumer_key' => "YWFZSU5Q6rCbTjjDkY1R7NW3A",
    'consumer_secret' => "NNKAGTfQMEe7L1Z7YOaKHPa8moMtoPXZwkfsfpaSEK3E9HSXl5"

$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';

$postfields = array(
    'screen_name' => 'kkirr2',
    'skip_status' => '1',
    'count' => '3'
);

** Perform the request and echo the response **/
$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($po
?>
