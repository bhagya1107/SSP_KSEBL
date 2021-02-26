function notifys(message, type){
    $.growl({
        message: message
    },{
        type: type,
        z_index: 5000,
        allow_dismiss: false,
        label: 'Cancel',
        className: 'btn-xs btn-inverse',
        placement: {
            from: 'top',
            align: 'right'
        },
        delay: 2500,
        animate: {
                enter: 'animated bounceIn',
                exit: 'animated bounceOut'
        },
        offset: {
            x: 30,
            y: 30
        }
    });
};

function playSound() {
      var sound = document.getElementById("audio");
      sound.play();
  }
