<?php

// yahoo rss

$news_list = simplexml_load_file('https://news.yahoo.co.jp/pickup/rss.xml');

foreach ($news_list->channel>item as $item) {

      echo '<a href="'.$item->link.'">'.$item->title.'</a>';
      echo '('.date('Y/m/d H:i:s', strtotime($item->pubDate)).')';
      echo '<br />';
}


?>
