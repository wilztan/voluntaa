(function($){
        
	"use strict";
            
	var ut_word_rotator = function() {
                
		var ut_rotator_words = [
                   
                   'Find Best Volunteer and Freelance Jobs',
                   'Prepare Yourself with Amazing Portfolios',
                   'Step Ahead as Qualified Work Forces'
		] ,
		counter = 0;                
                
		setInterval(function() {
		$("#ut_word_rotator_1").fadeOut(function(){
                $(this).html(ut_rotator_words[counter=(counter+1)%ut_rotator_words.length]).fadeIn();
            });
		}, 3000);
	}
            
	ut_word_rotator();
            
})(jQuery);