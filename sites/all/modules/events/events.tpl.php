<?php foreach($variable as $post){?>
    <div style="border: 1px dotted #000066">
        <h4>Title: <?php print $post->title; ?></h4>
        <h4>Description: <?php print $post->events_description_value; ?></h4>
        <h4>Date: <?php print $post->events_date_value; ?></h4>
        <h4>Available slots: <?php print $post->number_of_slots_value; ?></h4>
        <div><?php print l('Book','events/book',array('query' => array('eid' => $post->nid))); ?></div>
    </div>
<?php } ?>