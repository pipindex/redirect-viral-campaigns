/*
document.addEventListener("DOMContentLoaded", function(event) {
  document.getElementById("loger").onclick = function() {
	document.getElementById("log").submit();
}*/


/*
var telInput = $("#phone"),
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");
*/
// initialise plugin
/*
telInput.intlTelInput({
  defaultCountry: 'IE',
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.5.2/js/utils.js",
  geoIpLookup: function(callback) {
    setTimeout(function () {
      debugger;
      callback('ca');
    });


    $.get("https:learn.shawacademy.com/freegeoip/json", function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
});
*/
/*
*/
// on blur: validate
/*
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});
*/
// on keyup / change flag: reset
//telInput.on("keyup change", reset);





//});
