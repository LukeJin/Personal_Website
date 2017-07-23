

(function (d,w){
// Checks if page has loaded
d.addEventListener("DOMContentLoaded", function(){
	// adds an event listener to the button
	d.getElementById("dropbtn").addEventListener("click", function (){
		
		d.getElementById("mydropdown").style.display = "block";
		
	})
	
	d.getElementById("submit_butt").addEventListener("click", function () {
	
		confirm('Are you ready to submit?');
		
	})
	
})
})(document, window);
