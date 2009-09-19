 /* ************************************************************************************* *\
 * The MIT License
 * Copyright (c) 2007 Fabio Zendhi Nagao - http://zend.lojcomm.com.br
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 * 
\* ************************************************************************************* */

var iCarousel = new Class({
	options: {
		animation: {
			type: "fadeNscroll",// fadeNscroll, scroll, fade
			direction: "left",// if type = scroll, set: top || left
			amount: 1,// if type = scroll, set the amount to scroll
			transition: Fx.Transitions.Cubic.easeInOut,
			duration: 500,
			rotate: {
				type: "manual",// auto || manual
				interval: 5000,// if type = auto, set the interval (ms)
				onMouseOver: "stop"// if type = auto, set the onmouseover behavior: stop || proceed
			}
		},

		item: {
			klass: "item",
			size: 100
		},

		idPrevious: "previous",
		idNext: "next",
		idToggle: "toggle",

		onClickPrevious: Class.empty,
		onClickNext: Class.empty,
		onPrevious: Class.empty,
		onNext: Class.empty,
		onGoTo: Class.empty
	},

	initialize: function(container, options) {
		this.setOptions(options);
		this.container = $(container);
		this.aItems = $A($$('.'+ this.options.item.klass));
		this.isMouseOver = false;

		if(this.options.idPrevious != "undefined" && $(this.options.idPrevious))
			$(this.options.idPrevious).addEvent("click", function(event) {
				new Event(event).stop();
				this._previous();
				this.fireEvent("onClickPrevious", this, 20);
			}.bind(this));// check if value is not "undefined" before start search the dom with $()
		if(this.options.idNext != "undefined" && $(this.options.idNext))
			$(this.options.idNext).addEvent("click", function(event) {
				new Event(event).stop();
				this._next();
				this.fireEvent("onClickNext", this, 20);
			}.bind(this));
		if(this.options.idToggle != "undefined" && $(this.options.idToggle))
			$(this.options.idToggle).addEvent("click", function(event) {new Event(event).stop(); this._toggle()}.bind(this));

		var oAn = this.options.animation; // short hand
		switch(this.options.animation.type.toLowerCase()) {
			case "fade":
				this.aItems.each(function(item) {
					item.fx = item.effect("opacity", {duration: oAn.duration, transition: oAn.transition});
					item.setStyle("opacity", 0);
					item.addEvents({
						"mouseenter": function() {
							this.isMouseOver = true;
							if(this.options.animation.rotate.type == "auto") this.timer = $clear(this.timer);
						}.bind(this),
						"mouseleave": function() {
							this.isMouseOver = false;
							if(this.options.animation.rotate.type == "auto") this.timer = this._autoRotate.periodical(this.options.animation.rotate.interval, this);
						}.bind(this)
					});
				}.bind(this));
				this.height = this.container.getStyle("height").toInt();
				this.atScreen = 0;
				this._animate(this.atScreen);
				break;

			default:
				(2).times(function() {
					this.aItems.each(function(item) {
						item.clone().injectInside(this.container);
					}.bind(this));
				}.bind(this));
				this.aItems = $A($$('.'+ this.options.item.klass));
				this.aItems.each(function(item) {
					item.addEvents({
						"mouseenter": function() {
							this.isMouseOver = true;
							if(this.options.animation.rotate.type == "auto") this.timer = $clear(this.timer);
						}.bind(this),
						"mouseleave": function() {
							this.isMouseOver = false;
							if(this.options.animation.rotate.type == "auto") this.timer = this._autoRotate.periodical(this.options.animation.rotate.interval, this);
						}.bind(this)
					});
				}.bind(this));
				this.fx = this.container.effects({duration: oAn.duration, transition: oAn.transition, wait: false});
				this.atScreen = this.aItems.length /3;
				this.container.setStyle(oAn.direction, - this.atScreen * this.options.item.size - 60);
				break;
		}

		if(this.options.animation.rotate.type == "auto") this.timer = this._autoRotate.periodical(this.options.animation.rotate.interval, this);
	},

	goTo: function(n) {
		switch(this.options.animation.type.toLowerCase()) {
			case "fade":
				var lastIndex = this.atScreen;
				this.atScreen = Math.abs(n % (this.aItems.length /3));
				this._animate(this.atScreen, lastIndex);
				break;

			default:
				this.atScreen = Math.abs(n % (this.aItems.length /3));
				this.atScreen += this.aItems.length /3;
				this._animate(this.atScreen);
				break;
		}

		this.fireEvent("onGoTo", this, 20);
	},

	_previous: function() {
		switch(this.options.animation.type.toLowerCase()) {
			case "fade":
				var lastIndex = this.atScreen;
				this.atScreen -= this.options.animation.amount;
				if(this.atScreen < 0) this.atScreen = (this.aItems.length - 1);
				this._animate(this.atScreen, lastIndex);
				break;

			default:
				this.atScreen -= this.options.animation.amount;
				if(this.atScreen < this.aItems.length /3) {
					this.container.setStyle(this.options.animation.direction, - this.options.item.size * this.aItems.length * 2 /3);
					this.atScreen = this.aItems.length * 2 /3 - this.options.animation.amount;
				}
				this._animate(this.atScreen);
				break;
		}

		this.fireEvent("onPrevious", this, 20);
	},

	_next: function() {
		switch(this.options.animation.type.toLowerCase()) {
			case "fade":
				var lastIndex = this.atScreen;
				this.atScreen += this.options.animation.amount;
				if(this.atScreen >= this.aItems.length) this.atScreen = 0;
				this._animate(this.atScreen, lastIndex);
				break;

			default:
				this.atScreen += this.options.animation.amount;
				if(this.atScreen > this.aItems.length * 2 /3) {
					this.container.setStyle(this.options.animation.direction, - this.options.item.size * this.aItems.length /3);
					this.atScreen = this.aItems.length /3 + this.options.animation.amount;
				}
				this._animate(this.atScreen);
				break;
		}

		this.fireEvent("onNext", this, 20);
	},

	_toggle: function() {
		(this.container.getStyle("height").toInt() == 0) ?
			this.container.effect("height", { duration:1000, transition: Fx.Transitions.Sine.easeInOut }).start(this.height):
			this.container.effect("height", { duration:1000, transition: Fx.Transitions.Sine.easeInOut }).start(0);
	},

	_autoRotate: function() {
		if(this.options.animation.rotate.onMouseOver == "stop" && !this.isMouseOver) this._next();
	},

	_animate: function(a, b) {
		switch(this.options.animation.type) {
			case "fade":
				if($defined(b)) {
					this.aItems[b].fx.start(0).chain(function() {
					this.aItems[a].fx.start(1);}.bind(this));
				} else {
					this.aItems[a].fx.start(1);
				}
				break;

			case "scroll":
				var that = this;
				if(that.options.animation.direction == "top") {
					that.fx.start({"top" : - a * that.options.item.size});
				} else {
					that.fx.start({"left" : - a * that.options.item.size - 60});
				}
				break;

			case "fadeNscroll":
				var that = this;
				if(that.options.animation.direction == "top") {
					that.fx.start({"opacity":0.75}).chain(function() {
						that.fx.start({"top" : - a * that.options.item.size}).chain(function() {
							that.fx.start({"opacity": 1});
						});
					});
				} else {
					that.fx.start({"opacity":0.75}).chain(function() {
						that.fx.start({"left" : - a * that.options.item.size}).chain(function() {
							that.fx.start({"opacity": 1});
						});
					});
				}
				break;
		}
	}
});
iCarousel.implement(new Events); // Implements addEvent(type, fn), fireEvent(type, [args], delay) and removeEvent(type, fn)
iCarousel.implement(new Options);// Implements setOptions(defaults, options)