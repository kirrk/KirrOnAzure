<?php session_start();
include("http://kkirr.azurewebsites.net/wp-content/themes/help-is-here/twitteroauth/autoload.php");

$twitteruser = "kkirr2";
$notweets = 3;
$consumerkey = "YWFZSU5Q6rCbTjjDkY1R7NW3A";
$consumersecret = "NNKAGTfQMEe7L1Z7YOaKHPa8moMtoPXZwkfsfpaSEK3E9HSXl5";
$accesstoken = "337568622-GXvhtCEnq6D0FImnwXmaiUtKMDEj2UKMOF0pCuLO";
$accesstokensecret = "0IANdstX6sbj01BNViKKjukBAM37Ilz0vJa7WHC4fPvrV";

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}

$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$tweets = $connection->get("https://api.twitter.com/1.1/statuses/kkirr2.json?screen_name=".$twitteruser."&count=".$notweets);

echo json_encode($tweets);
?>
