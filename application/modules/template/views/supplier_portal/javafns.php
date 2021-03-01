<script>



var csfrData = {};
 csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';



 $.ajaxPrefilter(function (options, originalOptions, jqXHR) {

    if (originalOptions.data instanceof FormData) { 
         originalOptions.data.append('<?php echo $this->security->get_csrf_token_name(); ?>', '<?php echo $this->security->get_csrf_hash(); ?>'); 
    }
});


$.ajaxSetup({

    data: csfrData,
    global: true,
    beforeSend: function (jqXHR, settings) {
    var dt = settings.data;
    
    // if(dt instanceof FormData){

    //     for(var pair of dt.entries()) {
    //     if(pair[0] == "<?php echo $this->security->get_csrf_token_name(); ?>"){
    //         continue;
    //     }

    //     if(typeof pair[1] != 'object'){
    //         dt.set(pair[0],window.btoa(unescape(encodeURIComponent(pair[1])))) ;
    //     }
    //     }
    // }
    // else{
    
    //     for(var key in dt) {

    //     if(key != '<?php echo $this->security->get_csrf_token_name(); ?>'){
    //         dt[key] = window.btoa(unescape(encodeURIComponent(dt[key])));
    //     }
    //     }
    // }

},
complete: function(){
}

});
</script>