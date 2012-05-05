<?php

/**
* @file islandora-solr-search.tpl.php
* Islandora solr search results template
*
* Variables available:
* - $variables: all array elements of $variables can be used as a variable. e.g. $base_url equals $variables['base_url']
* - $base_url: The base url of the current website. eg: http://example.com .
* - $user: The user object.
*
* - $secondary_profiles: Rendered secondary profiles
* - $results: Rendered search results (primary profile)
* - $islandora_solr_result_count: Solr result count string
* - $solrpager: The pager
* - $solr_debug: debug info
*
*/
?>

<?php print $secondary_profiles; ?>
<h2 class="title"><?php print $solr_title; ?></h2>
<div id="islandora-solr-result-count"><?php print $islandora_solr_result_count; ?></div>
<div class="islandora-solr-content">
  <?php print $solr_pager; ?>
  <?php print $results; ?>
  <?php print $solr_debug; ?>
  <?php print $solr_pager; ?>
</div>