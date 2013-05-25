    <div class="row-fluid">
        <?php

          $url = "http://news.google.com/?ned=us&topic=t&output=rss";
          $rss = simplexml_load_file($url);
          
          if ( $rss ) {

            echo '<h1>'.$rss->channel->title.'</h1>';
            echo '<li>'.$rss->channel->pubDate.'</li>';

            $items = $rss->channel->item;
            
            foreach ( $items as $item ) {

              $title = $item->title;
              $link = $item->link;
              $published_on = $item->pubDate;
              $description = $item->description;

              echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
              echo '<span>('.$published_on.')</span>';
              echo '<p>'.$description.'</p>';
            }
          }
        ?>
    </div>