var idleTime = 0;
$(document).ready(function () {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement,1000); // 1 second

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});
keycount=0;
function timerIncrement() {
    idleTime = idleTime + 1;
    //console.log(idleTime);
    if (idleTime == 5) { //5seconds
       
       if(keycount<6){
        $('.popin.hidden:first').removeClass('hidden');
       }
       keycount++
       idleTime=0;
    }
}