<?php require_once("twitteroauth/twitteroauth.php");

$consumer_key = "YWFZSU5Q6rCbTjjDkY1R7NW3A";
$consumer_secret = "NNKAGTfQMEe7L1Z7YOaKHPa8moMtoPXZwkfsfpaSEK3E9HSXl5";
$access_token = "337568622-GXvhtCEnq6D0FImnwXmaiUtKMDEj2UKMOF0pCuLO";
$access_token_secret = "0IANdstX6sbj01BNViKKjukBAM37Ilz0vJa7WHC4fPvrV";
$nb_of_tweets = 3;
$include_rts = true;
$twitteruser = "ConnectUpKC";


 $connection = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

//date format
     function timeSince($time) {
       // $string = date ('D M y', mktime(0, 0, 0, date("m")  , date("d"), date("Y")));;
        // $since = time() - strtotime($time);

        $string     = '';

        $chunks = array(
            array(60 * 60 * 24 * 365 , 'year'),
            array(60 * 60 * 24 * 30 , 'month'),
            array(60 * 60 * 24 * 7, 'week'),
            array(60 * 60 * 24 , 'day'),
            array(60 * 60 , 'hour'),
            array(60 , 'minute'),
            array(1 , 'second')
        );

        for ($i = 0, $j = count($chunks); $i < $j; $i++) {
            $seconds = $chunks[$i][0];
            $name = $chunks[$i][1];
            if (($count = floor($since / $seconds)) != 0) {
                break;
            }
        }

        $string = ($count == 1) ? '1 ' . $name . ' ago' : $count . ' ' . $name . 's ago';

      //  echo $string;
        echo "\n";

    }

    //$tweets = $connection->get('statuses/user_timeline', array('screen_name' => $kkirr2, 'count' => $nb_of_tweets, 'include_rts' => $include_rts));
    $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$nb_of_tweets."&include_rts=".$include_rts
);

            ?>
    <ul>
      <?php
        foreach ($tweets as $key => $tweet): ?>
            <li><?php

                //links
              echo timeSince($tweet->created_at);
              echo '@'.$tweet->user->screen_name;
              echo '<img src=" '.$tweet->user->profile_image_url.' " />';
              echo $tweet->text . "<br />";

        echo "<script type='text/javascript' async src='//platform.twitter.com/widgets.js'></script>";
        echo "<a href='https://twitter.com/intent/tweet?in_reply_to=".$tweet->id_str."'>Reply</a>";
        echo "<a href='https://twitter.com/intent/retweet?tweet_id=".$tweet->id_str."'>Retweet</a>";
        echo "<a href='https://twitter.com/intent/favorite?tweet_id=".$tweet->id_str."'>Favorite</a>";

            ?></li>
        <?php endforeach ?>
    </ul>

