StingerSoft = function(){};

StingerSoft.Gauge = function(){};

StingerSoft.Gauge.Backend = function(){};

StingerSoft.Gauge.Backend.Presentation = function(){};



StingerSoft.Gauge.Backend.Presentation.loadSlide = function(url){
	jQuery('#content_holder').load(url);
};

StingerSoft.Gauge.Backend.Presentation.slides = [];

StingerSoft.Gauge.Backend.Presentation.currentSlide = false;

StingerSoft.Gauge.Backend.Presentation.loadPrev = function(){
	var prevSlideIndex = StingerSoft.Gauge.Backend.Presentation.slides.indexOf(StingerSoft.Gauge.Backend.Presentation.currentSlide) - 1;
	if(prevSlideIndex < 0 && prevSlideIndex < StingerSoft.Gauge.Backend.Presentation.slides.length){
		var prevSlide = StingerSoft.Gauge.Backend.Presentation.slides[prevSlideIndex];
		var url = Routing.generate('stinger_soft_gauge_presentation_slide', {'slide': prevSlide});
		StingerSoft.Gauge.Backend.Presentation.loadSlide(url);
		StingerSoft.Gauge.Backend.Presentation.currentSlide = prevSlide;
	}
};

StingerSoft.Gauge.Backend.Presentation.loadNext = function(){
	var nextSlideIndex = StingerSoft.Gauge.Backend.Presentation.slides.indexOf(StingerSoft.Gauge.Backend.Presentation.currentSlide) + 1;
	if(nextSlideIndex > 0 && nextSlideIndex < StingerSoft.Gauge.Backend.Presentation.slides.length){
		var nextSlide = StingerSoft.Gauge.Backend.Presentation.slides[nextSlideIndex];
		var url = Routing.generate('stinger_soft_gauge_presentation_slide', {'slide': nextSlide});
		StingerSoft.Gauge.Backend.Presentation.loadSlide(url);
		StingerSoft.Gauge.Backend.Presentation.currentSlide = nextSlide;
	}
};



