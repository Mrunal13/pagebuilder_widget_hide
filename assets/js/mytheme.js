jQuery(document).ready(function(){
    jQuery.each(mytheme_hide_widgets.mytheme_pagebuilder_widgets_list,function(i,val){
        jQuery('*:contains(val)').parent('.widget').remove();
    })
});