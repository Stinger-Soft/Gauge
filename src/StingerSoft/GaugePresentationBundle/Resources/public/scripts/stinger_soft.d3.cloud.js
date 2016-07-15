( function( $ ) {
	'use strict';
	var wc = $.wordCloud = {
	
		defaults : {
			fontMin: 15,
			fontMax: 30,
		},
		
		container: null,
		realWidth: null,
		realHeight: null,
		tagCloudColors: null,
		svg: null,
		that: this,
		
		init: function(container, config){
			this.container = container;
			this.config = config;
			this.drawSvg();
			this.drawCloud();
		},
		
		drawSvg: function(){
			this.realWidth = this.container.innerWidth();
			this.realHeight = this.container.innerHeight();
			this.svg = d3.select(this.container[0]).append("svg")
				.attr("width", this.realWidth)
				.attr("height", this.realHeight)
				.append("g")
					.attr("transform", "translate("+(this.realWidth/2)+","+(this.realHeight/2)+")");
		},
		
		getColorDelegate: function() {
			var colors = this.tagCloudColors || false;
			if(colors !== false && colors.length > 0) {
				return function(index) {
					var color =  colors[index % colors.length];
					return color;
				}
			} else {
				return d3.scaleOrdinal(d3.schemeCategory10);
			}
		},
		
		drawCloud: function(){
			this.fill = this.getColorDelegate();
			d3.layout.cloud().size([this.realWidth, this.realHeight])
				.words(this.words)
				.padding(5)
				.rotate(function() { return ~~(Math.random() * 2) * 90; })
				.font("Impact")
				.fontSize(function(d) { return d.size; })
				.on("end", this.draw)
				.start();
		},
		
		draw: function(){
		
		}
	
	};
	
	$.fn.wordCloud = function(settings) {
		return this.each(function() {
			var container = this,
			
			// merge & extend config options
			c = $.extend( true, {}, wc.defaults, settings);
			
			// save initial settings
			c.originalSettings = settings;
			
			wc.init(jQuery(container), c);
			
		});
	};
})( jQuery );