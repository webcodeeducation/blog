jQuery(function($) {

	    $( "#sortable1" ).sortable();
    	$( "#sortable1" ).disableSelection();
    	$( "#sortable2" ).sortable();
    	$( "#sortable2" ).disableSelection();


    jQuery(".draggable").draggable({
        //  use a helper-clone that is append to 'body' so is not 'contained' by a pane
        helper: function() {
            return jQuery(this).clone().appendTo('body').css({
                'zIndex': 5
            });
        },
        cursor: 'move',
        containment: "document"
    });

    jQuery('.droppable').droppable({
        activeClass: 'ui-state-hover',
        accept: '.draggable',
        drop: function(event, ui) {
            if (!ui.draggable.hasClass("dropped"))
                jQuery(this).append(jQuery(ui.draggable).clone().addClass("dropped").draggable());
            }
        });

    $("li").dblclick(function() {
$(this).remove();
});



    });	// end jquery here