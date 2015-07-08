<?php require_once("twitteroauth/twitteroauth.php");

$consumer_key = "YWFZSU5Q6rCbTjjDkY1R7NW3A";
$consumer_secret = "NNKAGTfQMEe7L1Z7YOaKHPa8moMtoPXZwkfsfpaSEK3E9HSXl5";
$access_token = "337568622-GXvhtCEnq6D0FImnwXmaiUtKMDEj2UKMOF0pCuLO";
$access_token_secret = "0IANdstX6sbj01BNViKKjukBAM37Ilz0vJa7WHC4fPvrV";
$nb_of_tweets = 3;
$include_rts = false;

 $connection = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

    $tweets = $connection->get('statuses/user_timeline', array('count' => $nb_of_tweets, 'include_rts' => $include_rts));
            ?>
    <ul>
        <?php  foreach ($tweets as $key => $tweet): ?>
            <li><?php

                //links
        $tweet = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","<a target='_blank' href=\"\\0\">\\0</a>",  $tweet->text);
        //#
        $tweet = preg_replace('/(^|\s)#(\w*[a-zA-Z_]+\w*)/', '\1<a target="_blank" href="https://twitter.com/search?q=%23\2&src=hash">#\2</a>', $tweet);
        //@
        $tweet = preg_replace('/[@]+([A-Za-z0-9-_]+)/', '<a target="_blank" href="http://twitter.com/$1" target="_blank">@$1</a>', $tweet );

                echo $tweet;

            ?></li>
        <?php endforeach ?>
    </ul>
