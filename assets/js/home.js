//////////////////////////////////////////////////////////////////////////////////////////////////////
//be sure to add an id to the div with the active and inactive box styles as well as the triangle divs
//////////////////////////////////////////////////////////////////////////////////////////////////////

//each variable is the text that will go under each of the categories. the name should fit the description of the text
var fiberDependabilityText="Fiber Internet isn't reliant on electrical power. The network isn't subject to interference common for cable connections.";
var fiberSpeedText="Fiber-optics networks send data over long distances with maintained speed. A dedicated line means neighboring traffic has no impact on speed. Neighboring use or bandwidth required won't compromise network performance.";
var cableDependabilityText="Cable is reliable, unless you live far from your provider office. Your distance from the source will impact the likelihood of diminished speeds.";
var cableSpeedText="Top speeds are decent, but under ideal conditions only. Latency, delays experienced during data processing, is common. Subscribers share a cable connection among hundreds of neighbors. This means your speed during peak times will drop if many users access the network at once.";

$(document).ready(function(){    
    //when the div is clicked this event is fired
  $("#dependabilityBox").click(function(){
	//set the element id and the innerhtml to swap the text  
    document.getElementById("fiberTextArea").innerHTML=fiberDependabilityText;
	document.getElementById("cableTextArea").innerHTML=cableDependabilityText;
	//put the id that you want to make light blue in the makeActive parameter along with the accompanying triangle. Make all of the other
	//classes inactive by using the makeInactive function.
	makeActive("#dependabilityBox","#dependabilityTriangle");
	makeInactive("#speedBox", "#speedTriangle");   
  });
  
    $("#speedBox").click(function(){
    document.getElementById("fiberTextArea").innerHTML=fiberSpeedText;
	document.getElementById("cableTextArea").innerHTML=cableSpeedText;

	makeActive("#speedBox", "#speedTriangle"); 
	makeInactive("#dependabilityBox","#dependabilityTriangle");
	   
    
  });
  
  //makes activationBox and activationTriangle the active class
	function makeActive(activationBox, activationTriangle){
		$(activationBox).addClass("active-box");
		$(activationTriangle).addClass("active-triangle");	
		$(activationBox).removeClass("inactive-box");
		$(activationTriangle).removeClass("inactive-triangle");
			
		  
		  
	}
	//deactivates a box and triangle set
	function makeInactive(deactivationBox, deactivationTriangle){
		$(deactivationBox).addClass("inactive-box");
		$(deactivationTriangle).addClass("inactive-triangle");    
		$(deactivationBox).removeClass("active-box");
		$(deactivationTriangle).removeClass("active-triangle");			
	}
  
});
