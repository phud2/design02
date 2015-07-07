//////////////////////////////////////////////////////////////////////////////////////////////////////
//be sure to add an id to the div with the active and inactive box styles as well as the triangle divs
//////////////////////////////////////////////////////////////////////////////////////////////////////

//each variable is the text that will go under each of the categories. the name should fit the description of the text
var fiberConstructionText="It's a lighter-weight, higher-capacity connection. Proximity to high-voltage electrical equipment won't compromise performance. It could with a DSL or cable connection.";
var fiberAvailabilityText="Fiber-optic Internet requires new infrastructure, which limits availability. As markets add fiber capability, it drives the demand in new markets.";
var fiberSustainabilityText="Fiber optic Internet has just scratched the surface of its capability. Fiber can accommodate a growing demand for bandwidth for Internet, phone and TV.";
var fiberSignalText="Data sent on a fiber-optic network realizes no attenuation, regardless of distance traveled.";

var cableConstructionText="Cable Internet comes through the coaxial cables that connect your TV service. Users share these connections with neighbors. This compromises security and speed.";
var cableAvailabilityText="Cable networks are established and far-reaching. If your town gets cable TV, it can also get cable Internet.";
var cableSustainabilityText="Copper wires were a technological breakthrough in the 1820s. Household demand has shifted from the telephone to high-speed Internet. It's an antiquated infrastructure.";
var cableSignalText="Attenuation is the eventual loss of intensity of a signal. In cable connections, it's inevitable over great distances.";

var currentBox= "#constructionBox";
var currentTriangle= "#constructionTriangle";				

$(document).ready(function(){    
    //when the div is clicked this event is fired
  $("#constructionBox").click(function(){
	//set the element id and the innerhtml to swap the text  
    document.getElementById("fiberTextArea").innerHTML=fiberConstructionText;
	document.getElementById("cableTextArea").innerHTML=cableConstructionText;
	//put the id that you want to make light blue in the makeActive parameter along with the accompanying triangle. The makeInactive function
	//will take the currently active box and deactivate it.
	
	makeInactive(currentBox, currentTriangle);	
	makeActive("#constructionBox","#constructionTriangle");
   
  });
  
    $("#availabilityBox").click(function(){
    document.getElementById("fiberTextArea").innerHTML=fiberAvailabilityText;
	document.getElementById("cableTextArea").innerHTML=cableAvailabilityText;
	
	makeInactive(currentBox, currentTriangle);
	makeActive("#availabilityBox", "#availabilityTriangle");
	
  });
  
  $("#sustainabilityBox").click(function(){
    document.getElementById("fiberTextArea").innerHTML=fiberSustainabilityText;
	document.getElementById("cableTextArea").innerHTML=cableSustainabilityText;

	makeInactive(currentBox, currentTriangle);	
	makeActive("#sustainabilityBox", "#sustainabilityTriangle");
  });
  
  $("#signalBox").click(function(){
    document.getElementById("fiberTextArea").innerHTML=fiberSignalText;
	document.getElementById("cableTextArea").innerHTML=cableSignalText;

	makeInactive(currentBox, currentTriangle);
	makeActive("#signalBox", "#signalTriangle");  
  });
  
  //makes activationBox and activationTriangle the active class
	function makeActive(activationBox, activationTriangle){
		$(activationBox).addClass("active-box");
		$(activationTriangle).addClass("active-triangle");	
		$(activationBox).removeClass("inactive-box");
		$(activationTriangle).removeClass("inactive-triangle");
		
		currentBox= activationBox;
		currentTriangle= activationTriangle;	
		
		  
	}
	//deactivates a box and triangle set
	function makeInactive(deactivationBox, deactivationTriangle){
		$(deactivationBox).addClass("inactive-box");
		$(deactivationTriangle).addClass("inactive-triangle");    
		$(deactivationBox).removeClass("active-box");
		$(deactivationTriangle).removeClass("active-triangle");			
	}
  
});
