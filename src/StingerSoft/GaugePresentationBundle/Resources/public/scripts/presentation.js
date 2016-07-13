StingerSoft = function(){};

StingerSoft.Gauge = function(){};

StingerSoft.Gauge.Backend = function(){};

StingerSoft.Gauge.Backend.Presentation = function(){};



StingerSoft.Gauge.Backend.Presentation.loadSlide = function(url){
	jQuery('#content_holder').load(url);
};

StingerSoft.Gauge.Backend.Presentation.slides = [];

StingerSoft.Gauge.Backend.Presentation.currentSlide = false;


