<?php require_once("twitteroauth/twitteroauth.php");

$consumer_key = "YWFZSU5Q6rCbTjjDkY1R7NW3A";
$consumer_secret = "NNKAGTfQMEe7L1Z7YOaKHPa8moMtoPXZwkfsfpaSEK3E9HSXl5";
$access_token = "337568622-GXvhtCEnq6D0FImnwXmaiUtKMDEj2UKMOF0pCuLO";
$access_token_secret = "0IANdstX6sbj01BNViKKjukBAM37Ilz0vJa7WHC4fPvrV";
$nb_of_tweets = 3;
$include_rts = true;
$twitteruser = "ConnectUpKC";


 $connection = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

    //$tweets = $connection->get('statuses/user_timeline', array('screen_name' => $kkirr2, 'count' => $nb_of_tweets, 'include_rts' => $include_rts));
    $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$nb_of_tweets."&include_rts=".$include_rts
);

            ?>
    <ul>
      <?php
        foreach ($tweets as $key => $tweet): ?>
            <li><?php

                //links
              echo $tweet->text . "<br />";
              echo '<img src=" '.$tweet->user->profile_image_url.' " />';

            ?></li>
        <?php endforeach ?>
    </ul>

<script type="text/javascript" async src="//platform.twitter.com/widgets.js"></script>
<a href='https://twitter.com/intent/tweet?in_reply_to='.<?php $tweet->id;?>>Reply</a>
<a href="https://twitter.com/intent/retweet?tweet_id=463440424141459456">Retweet</a>
<a href="https://twitter.com/intent/favorite?tweet_id=463440424141459456">Favorite</a>
s
