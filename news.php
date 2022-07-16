<?php
$news = simplexml_load_file('http://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=n&output=rss');
echo '<pre>';
// print_r($news);
echo '</pre>';

// $news->channel is also an array
// foreach ($news->channel as $channel) {
//     echo "<b>";
//     echo $channel->title; echo "<br>";
//     echo $channel->link; echo "<br>";
//     echo $channel->language;echo "</b><br>";
// }


$feeds = array();

$i = 0;



foreach ($news->channel->item as $item) 
{
    preg_match('@src="([^"]+)"@', $item->description, $match);
    $parts = explode('<font size="-1">', $item->description);

    $feeds[$i]['title'] = (string) $item->title;
    $feeds[$i]['link'] = (string) $item->link;
    $feeds[$i]['image'] = $match[1];
    $feeds[$i]['site_title'] = strip_tags($parts[1]);
    $feeds[$i]['story'] = strip_tags($parts[2]);
    $feeds[$i]['description'] = (string) $item->description;
    $i++; 
}
?>

<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    
<?php
foreach ($feeds as $key=>$feed) {
    foreach ($feed as $key=>$value) {?>
        <tr>
           <th scope="row"><?php echo $feed['title']; ?></th>
           <tr> scope="row"><?php echo $feed['link']?></tr>
           <tr> scope="row"><?php echo $feed['description']?></tr>
        </tr>
    <?php }
}?>
  
