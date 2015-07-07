(function($) {
  var NumberProgressBar = function(element, options) {
    var settings = $.extend ({
      duration: 10000,
      style: 'basic',
      min: 0,
      max: 100,
      current: 0,
      reverse: false,
      shownQuery: '.number-pb-shown',
      numQuery: '.number-pb-num'
    }, options || {});

    this.duration = settings.duration;
    switch(settings.style) {
      case 'fiberOptic':
        this.style = 'fiberOptic';
        this.min = 0;
        this.max = 100;
        break;
      case 'user':
        this.style = 'user';
        this.min = 0;
        this.max = 100;
        break;
      default:
        this.style = 'basic';
        this.reverse = settings.reverse;
        if (settings.min < settings.max) {
          this.min = settings.min;
          this.max = settings.max;
        } else {
          this.min = 0;
          this.max = 100;
        }
    }
    if (settings.current >= this.min && settings.current <= this.max) {
      this.current = settings.current;
    } else {
      this.current = this.reverse ? this.max : this.min;
    }
    this.interval = this.max - this.min;
    this.last = this.reverse ? this.max : this.min;
    this.$element = $(element);
    this.$shownBar = this.$element.find(settings.shownQuery);
    this.$num = this.$element.find(settings.numQuery);
    this.reach(this.current);
  }

  NumberProgressBar.prototype.calDestination = function(dest) {
    return (dest < this.min) ? this.min : ( (dest > this.max) ? this.max : dest )
  }

  NumberProgressBar.prototype.calDuration = function() {
    return this.duration * Math.abs(this.current - this.last) / this.interval;
  }

  NumberProgressBar.prototype.shuffle = function(callback) {
    var dest = Math.round(Math.random() * this.interval) + this.min;
    this.reach(dest, null, callback);
  }

  NumberProgressBar.prototype.calPercentage = function() {
    if (this.reverse) {
      return Math.abs(this.current - this.max) / this.interval * 100;
    } else {
      return (this.current - this.min) / this.interval * 100;
    }
  }

  NumberProgressBar.prototype.numStyle = function(num) {
    var n = Math.ceil(num);
    var s = "";
    switch (this.style) {
      case 'fiberOptic': s = 'up to ' + 1000 + ' Mpbs';            break;
      case 'user'      : s = 10 + ' Mpbs';              break;
      default          : s = n;
    }
    return s;
  }

  NumberProgressBar.prototype.reach = function(dest, duration, callback) {
    this.current = this.calDestination(dest);
    this.moveShown(duration);
    this.moveNum(duration, callback);
    this.last = this.current;
  }

  NumberProgressBar.prototype.moveShown = function(duration) {
    this.$shownBar.velocity({
      width: this.calPercentage() + '%'
    }, {
      duration: duration || this.calDuration()
    })
  }

  NumberProgressBar.prototype.moveNum = function(duration, callback) {
    var self = this;
    var duration = duration || this.calDuration();

    this.$num.velocity({
      left: this.calPercentage() + '%'
    }, {
      duration: duration,
      complete: callback
    });

    // number
    $({num: this.last}).animate({
      num: this.current
    }, {
      queue: true,
      duration: duration,
      step: function() {
        self.$num.text(self.numStyle(this.num));
      },
      complete: function() {
        self.$num.text(self.numStyle(self.current));
      }
    })
  }

  $.fn.NumberProgressBar = function(options) {
    return this.each(function () {
      var element = $(this);
      if (element.data('number-pb')) return;
      element.data('number-pb', new NumberProgressBar(this, options));
    })
  }

  $.fn.reach = function(dest, options) {
    var settings = $.extend ({
      duration : null,
      complete : null
    }, options || {});
    return this.each(function() {
      var element = $(this);
      var progressbar = element.data('number-pb');
      if (!progressbar) return;
      if (typeof dest === "undefined") {
        progressbar.shuffle(settings.complete);
      } else {
        progressbar.reach(dest, settings.duration, settings.complete);
      }
    })
  }

})(jQuery);