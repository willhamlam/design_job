(function($){
	$(function(){
		$( 'audio' ).audioPlayer(
		{
		    classPrefix: 'w7r-player', // default value: 'audioplayer'
		    strPlay: 'Play', // default value: 'Play'
		    strPause: 'Pause', // default value: 'Pause'
		    strVolume: 'Volume', // default value: 'Volume'
		});

		// console.log('success');
		$('#datepicker').datepicker({
				inline: true,
				//nextText: '&rarr;',
				//prevText: '&larr;',
				showOtherMonths: true,
				//dateFormat: 'dd MM yy',
				dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
				//showOn: "button",
				//buttonImage: "img/calendar-blue.png",
				//buttonImageOnly: true,
			});
	});
})(jQuery);