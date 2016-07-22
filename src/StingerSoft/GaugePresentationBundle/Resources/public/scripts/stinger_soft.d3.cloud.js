( function( $ ) {
	'use strict';
	var wc = $.wordCloud = {
	
		defaults : {
			fontMin: 15,
			fontMax: 30,
			font: 'Impact',
			colors: false
		},
		
		container: null,
		realWidth: null,
		realHeight: null,
		tagCloudColors: null,
		svg: null,
		that: this,
		fill: null,
		max: 0,
		min: 0,
		words: [],
		
		init: function(container, words, config){
			this.container = container;
			this.container.on('update.wordcloud', this, this.update);
			this.config = config;
			this.max = Math.max.apply(Math,words.map(function(o){return o.count;}));
			this.min = Math.min.apply(Math,words.map(function(o){return o.count;}));
			var that = this;
			this.words = words.map(function(d) {
				return {
					text: d.text, 
					count: d.count, 
					size: d.count == that.min ? config.fontMin : (d.count / that.max) * (config.fontMax - config.fontMin) + config.fontMin
				};
			});
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
			var colors = this.config.colors || false;
			if(colors !== false && colors.length > 0) {
				return function(index) {
					var color =  colors[index % colors.length];
					return color;
				}
			} else {
				// d3 4.x
				if(typeof d3.scaleOrdinal === "function"){
					return d3.scaleOrdinal(d3.schemeCategory10);
				// d3 3.x
				} else{
					return d3.scale.category20();
				}
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
				.on("end", jQuery.proxy(this.draw, this))
				.start();
		},
		
		draw: function(){
			var that = this;
			var cloud = this.svg.selectAll("text")
				.data(this.words, function(d){return d.text;});
				
			//Entering words
			cloud.enter()
				.append("text")
					.style("font-family", that.config.font )
					.style("fill", function(d, i) { return that.fill(i); })
					.attr("text-anchor", "middle")
					.attr('font-size', function(d) { return d.size; })
					.text(function(d) { return d.text; });
				
			//Entering and existing words
			cloud
				.transition()
					.duration(600)
					.style("font-size", function(d) { return d.size + "px"; })
					.attr("transform", function(d) {
						return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
					})
					.style("fill-opacity", 1);
	
			//Exiting words
			cloud.exit()
				.transition()
					.duration(200)
					.style('fill-opacity', 1e-6)
					.attr('font-size', 1)
					.remove();
		},
		
		update: function(e, words){
			var that = e.data;
			that.max = Math.max.apply(Math, words.map(function(o){return o.count;}));
			that.min = Math.min.apply(Math, words.map(function(o){return o.count;}));
			that.words = words.map(function(d) {
				return {
					text: d.text, 
					count: d.count, 
					size: d.count == that.min ? that.config.fontMin : (d.count / that.max) * (that.config.fontMax - that.config.fontMin) + that.config.fontMin
				};
			});
			d3.select(that.container).transition();
			jQuery.proxy(that.drawCloud(), that);
		}
	
	};
	
	$.fn.wordCloud = function(words, settings) {
		return this.each(function() {
			var container = this,
			
			// merge & extend config options
			c = $.extend( true, {}, wc.defaults, settings);
			
			// save initial settings
			c.originalSettings = settings;
			
			wc.init(jQuery(container), words, c);
			
		});
	};
})( jQuery );