$(document).ready(function()
{
	$("#color-change").click(function()
	{
		$("body").css({

		    "background-color": "black",

		    "font-weight": "bold",
		    
		    "color":"white",

		});
	
	});

	$("#toggle-content").click(function()
	{
		$("#custom-header").toggle(500);
	
	});
});

