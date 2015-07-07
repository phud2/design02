

			var clock;
			
			
			FlipClock.CustomHourlyCounterFace = FlipClock.Face.extend({
				
			// clearExcessDigits: true,

			/**
			 * Constructor
			 *
			 * @param  object  The parent FlipClock.Factory object
			 * @param  object  An object of properties to override the default	
			 */
			 
			constructor: function(factory, options) {
				this.base(factory, options);
			},
			
			/**
			 * Build the clock face
			 */
			
			build: function(excludeHours, time) {
				var t = this;
				var children = this.factory.$el.find('ul');
				
				time = time ? time : this.factory.time.getHourCounter();
				
				if(time.length > children.length) {
					$.each(time, function(i, digit) {
						t.createList(digit);
					});
				}
				
				$(this.createDivider('Seconds', true)).insertBefore(this.lists[this.lists.length - 2].$el);
				$(this.createDivider('Minutes', true)).insertBefore(this.lists[this.lists.length - 4].$el);
				
				if(!excludeHours) {
					$(this.createDivider('Hours', true)).insertBefore(this.lists[0].$el);
				}
				
				this.base();
			},
			
			/**
			 * Flip the clock face
			 */
			 
			flip: function(time, doNotAddPlayClass) {
				if(!time) {
					time = this.factory.time.getHourCounter();
				}	

				this.autoIncrement();
			
				this.base(time, doNotAddPlayClass);
			},

			/**
			 * Append a newly created list to the clock
			 */

			appendDigitToClock: function(obj) {
				this.base(obj);

				this.dividers[0].insertAfter(this.dividers[0].next());
			}
			
		});

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
		