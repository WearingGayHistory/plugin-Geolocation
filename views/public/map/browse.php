<?php 
queue_css_file('geolocation-items-map');

$title = __('Browse Items on the Map') . ' ' . __('(%s total)', $totalItems);
echo head(array('title' => $title, 'bodyclass' => 'map browse'));
?>

<h1><?php echo $title; ?></h1>

<nav class="items-nav navigation secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>

<?php
echo item_search_filters();
echo pagination_links();
?>
<div class="row">
	<div class="col-md-12" id="geolocation-browse">
		<p>Please allow up to one minute for the map to load.</p>
    	<?php echo $this->googleMap('map_browse', array('list' => 'map-links', 'params' => $params)); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12" id="map-links"><h2><?php echo __('Find An Item on the Map'); ?></h2></div>
</div>

<?php echo foot(); ?>
