$(document).ready(function(){    
    
	//carousel settings
	
	$("#carousel-home-one").owlCarousel({
		slideSpeed: 100,
		paginationSpeed: 100,
		singleItem: true,
		afterInit : function(elem){
			var that = this
			that.owlControls.prependTo(elem)
		}	
	});

});