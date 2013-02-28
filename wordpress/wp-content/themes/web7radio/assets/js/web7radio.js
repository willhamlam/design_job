(function($){
	$(function(){
		$( 'audio' ).audioPlayer(
		{
		    classPrefix: 'w7r-player', // default value: 'audioplayer'
		    strPlay: 'Play', // default value: 'Play'
		    strPause: 'Pause', // default value: 'Pause'
		    strVolume: 'Volume', // default value: 'Volume'
		});

		console.log('success');
	});
})(jQuery);