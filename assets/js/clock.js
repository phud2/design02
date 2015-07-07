			
			var clock;
			
			$(document).ready(function() {
				var clock;
				
				// Grab the current date
				var currentDate = new Date();
				var minutes = currentDate.getMinutes();
				var hour = currentDate.getHours();
				
				// Set the available time for calling in minutes
				var hoursOpen = 68400;  // 19 Hour call period
				var timeTillOpen = 25200; // 7 AM start time
				
				// Set some date in the future. In this case, it's always Jan 1
				currentTime = (minutes * 60) + (hour * 3600);
				
				// Calculate the time left in the current call period to show on timer. 
				var diff = (hoursOpen + timeTillOpen) - currentTime;
				
				clock = $('.clock').FlipClock({
			        clockFace: 'CustomHourlyCounter',
			        autoStart: false,
			        callbacks: {
			        	stop: function() {
			        		$('.message').html('The clock has stopped!')
			        	},	
			        }
			    });
                
                clock2 = $('.clock2').FlipClock({
			        clockFace: 'CustomHourlyCounter',
			        autoStart: false,
			        callbacks: {
			        	stop: function() {
			        		$('.message').html('The clock has stopped!')
			        	},	
			        }
			    });
					    
			    clock.setTime(diff);
			    clock.setCountdown(true);
			    clock.start();
                
                clock2.setTime(diff);
			    clock2.setCountdown(true);
			    clock2.start();

			});
		