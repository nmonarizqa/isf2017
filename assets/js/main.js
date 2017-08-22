$(function() {

	// Cache the Window object
	var $window = $(window);

	// Parallax Backgrounds
	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641

	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object

		$(window).scroll(function() {

			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			// Put together our final background position
			var coords = '50% '+ yPos + 'px';

			// Move the background
			$bgobj.css({ backgroundPosition: coords });

		}); // end window scroll
	});

});

var dateNow = new Date();
var countdown_date = new Date(2017, 7, 26, 12, 0).getTime();
var days, hours, minutes, seconds;
// update every 1 second
var timer = setInterval(function () {CountdownTimer()}, 1000);
function CountdownTimer()
{
// calculate difference between now and countdown date
var current_date = new Date().getTime();
var seconds_left = (countdown_date - current_date) / 1000;
// calculations
days = parseInt(seconds_left / 86400);
seconds_left = seconds_left % 86400;
hours = parseInt(seconds_left / 3600);
seconds_left = seconds_left % 3600;
minutes = parseInt(seconds_left / 60);seconds = parseInt(seconds_left % 60);

document.getElementById("CountDownDays").innerHTML = (days);document.getElementById("CountDownHours").innerHTML = (hours);

document.getElementById("CountDownMinutes").innerHTML = (minutes);

document.getElementById("CountDownSeconds").innerHTML = (seconds);

if(seconds_left <= 0)

{

clearInterval(timer);

document.getElementById("showMsg").style.display = "block";

document.getElementById("countdown").style.display = "none";

}

}
