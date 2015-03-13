<?php
$this->getParentBlock($data, $request);
?>
<script type="text/javascript">
    // si jQuery est chargé
    if (typeof(jQuery) != "undefined") {
        jQuery(window).load(function() {
            // skin input sFilter
            jQuery('.dataTables_filter input[type=search]:first').addClass('form-control');
            //TODO: ajouter ici des classes custom qu'on positionne depuis des surcharges dans le controleur
        });
    }
</script>
