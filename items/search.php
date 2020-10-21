<?php
$pageTitle = __('Search Entries');
echo head(array(
    'title' => $pageTitle,
    'bodyclass' => 'items advanced-search',
    'bodyid' => 'items',
));
?>
<div id="primary">
    <div class="row page-header">
        <div class="col-xs-12">
            <h1><span class="glyphicon glyphicon-search"></span> <?php echo $pageTitle; ?></h1>
        </div>
    </div>
    <br />
    <?php echo $this->partial('items/search-form.php',
        array('formAttributes' =>
            array('id' => 'advanced-search-form'))); ?>
</div><?php // end primary. ?>
<?php echo foot();
