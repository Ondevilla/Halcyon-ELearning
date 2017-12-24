<style>
	.radioholder {
	width: 48%;
	background: #fff;
	margin-bottom: 1em;
	font-size: 1.3em;
	height: 2.4em;
	color: #666;
	-o-transition: .1s ease-out;
	-ms-transition: .1s ease-out;
	-moz-transition: .1s ease-out;
	-webkit-transition: .1s ease-out;
	transition: .1s ease-out;
	cursor: pointer;
}


.activeradioholder {
	background: #39A9A4;
	color: #fff;
}

.radioholder .desc {
	display: inline-block;
	vertical-align: middle;
	padding-left: .6em;
	line-height: 2.4em;
}

.radioholder .tick {
	display: inline-block;
	vertical-align: middle;
	width: 2.4em;
	height: 100%;
	background-color: #eee;
	background-image: none;
	-o-transition: .1s ease-out;
	-ms-transition: .1s ease-out;
	-moz-transition: .1s ease-out;
	-webkit-transition: .1s ease-out;
	transition: .1s ease-out;
}

.activeradioholder .tick {
	background-color: #2A817C;
	background-image: url('img/radio_tick.png');
	background-size: cover;
}

.radioholder:nth-child(odd) {
	float: right;
}

.radioholder:nth-child(even) {
	float: left;
}

.radioholder:hover {
	background-color: #eee;
}

.radioholder:hover .tick {
	background-color: #ddd;
}

.activeradioholder:hover {
	background-color: #39A9A4;
}

.activeradioholder:hover .tick {
	background-color: #2A817C;
}


.selectholder {
  clear: both;
	width: 100%;
	background: #eee;
	margin-bottom: 1em;
	font-size: 1.3em;
	height: 2.4em;
	color: #666;
	-o-transition: .1s ease-out;
	-ms-transition: .1s ease-out;
	-moz-transition: .1s ease-out;
	-webkit-transition: .1s ease-out;
	transition: .1s ease-out;
	cursor: pointer;
}

.selectholder .desc {
	display: inline-block;
	vertical-align: middle;
	padding-left: .8em;
	line-height: 2.4em;
}

.selectholder .pulldown {
	float: right;
	vertical-align: middle;
	width: 2.4em;
	height: 100%;
	background-color: #ddd;
	background-image: url('img/pulldown.png');
	background-size: cover;
	-o-transition: .1s ease-out;
	-ms-transition: .1s ease-out;
	-moz-transition: .1s ease-out;
	-webkit-transition: .1s ease-out;
	transition: .1s ease-out;
}

.selectholder:hover,
.activeselectholder {
	background-color: #ddd;
}

.selectholder:hover .pulldown,
.activeselectholder .pulldown {
	background-color: #333;
	background-image: url('img/pulldown_hover.png');
}

.selectholder .selectdropdown {
	position: relative;
	top: 0;
	left: 0;
	background: #333;
	color: #fff;
	display: none;
	clear: both;
}

.selectholder .selectdropdown span {
	display: block;
	border-bottom: solid 1px #555;
	padding-left: .8em;
	line-height: 2.4em;
	width: 100%;
	-o-transition: background-color .1s ease-out;
	-ms-transition: background-color .1s ease-out;
	-moz-transition: background-color .1s ease-out;
	-webkit-transition: background-color .1s ease-out;
	transition: background-color .1s ease-out;
}

.selectholder .selectdropdown span:last-child {
	border-bottom: none;
}

.selectholder .selectdropdown span.active {
	background-color: #2A817C;
	background-image: url('img/radio_tick.png');
	background-repeat: no-repeat;
	background-size: 1.6em 1.6em;
	background-position: 98% 50%;
}

.selectholder .selectdropdown span:hover {
	background-color: #555;
}


</style>

<script type="text/javascript">
// preload image function
function preload(arrayOfImages) {
	$(arrayOfImages).each(function(){
		$('<img/>')[0].src = this;
	});
}

$(document).ready(function(){

  // set up radio boxes
	$('.radioholder').each(function(){
		$(this).children().hide();
		var description = $(this).children('label').html();
		$(this).append('<span class="desc">'+description+'</span>');
		$(this).prepend('<span class="tick"></span>');
		// on click, update radio boxes accordingly
		$(this).click(function(){
			$(this).children('input').prop('checked', true);
			$(this).children('input').trigger('change');
		});
	});
	// update radio holder classes when a radio element changes
	$('input[type=radio]').change(function(){
    $('input[type=radio]').each(function(){
      if($(this).prop('checked') == true) {   
        $(this).parent().addClass('activeradioholder');
      }
			else $(this).parent().removeClass('activeradioholder');
		});
	});
	// manually fire radio box change event on page load
	$('input[type=radio]').change();

	// set up select boxes
	$('.selectholder').each(function(){
		$(this).children().hide();
		var description = $(this).children('label').text();
		$(this).append('<span class="desc">'+description+'</span>');
		$(this).append('<span class="pulldown"></span>');
		// set up dropdown element
		$(this).append('<div class="selectdropdown"></div>');
	  $(this).children('select').children('option').each(function(){
			if($(this).attr('value') != '0') {
				$drop = $(this).parent().siblings('.selectdropdown');
				var name = $(this).attr('value');
				$drop.append('<span>'+name+'</span>');
			}
		});
		// on click, show dropdown
		$(this).click(function(){
			if($(this).hasClass('activeselectholder')) {
				// roll up roll up
				$(this).children('.selectdropdown').slideUp(200);
				$(this).removeClass('activeselectholder');
				// change span back to selected option text
				if($(this).children('select').val() != '0') {
					$(this).children('.desc').fadeOut(100, function(){
						$(this).text($(this).siblings("select").val());
						$(this).fadeIn(100);
					});
				}
			}
			else {
				// if there are any other open dropdowns, close 'em
				$('.activeselectholder').each(function(){
					$(this).children('.selectdropdown').slideUp(200);
					// change span back to selected option text
					if($(this).children('select').val() != '0') {
						$(this).children('.desc').fadeOut(100, function(){
							$(this).text($(this).siblings("select").val());
							$(this).fadeIn(100);
						});
					}
					$(this).removeClass('activeselectholder');
				});			
				// roll down
				$(this).children('.selectdropdown').slideDown(200);
				$(this).addClass('activeselectholder');
				// change span to show select box title while open
				if($(this).children('select').val() != '0') {
					$(this).children('.desc').fadeOut(100, function(){
						$(this).text($(this).siblings("select").children("option[value=0]").text());
						$(this).fadeIn(100);
					});
				}
			}
		});
	});
	// select dropdown click action
	$('.selectholder .selectdropdown span').click(function(){
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		var value = $(this).text();
		$(this).parent().siblings('select').val(value);
		$(this).parent().siblings('.desc').fadeOut(100, function(){
			$(this).text(value);
			$(this).fadeIn(100);
		});
	});
	
	// preload hover images
  preload([
    'http://supereightstudio.com/img/radio_tick.png',
    'http://supereightstudio.com/img/pulldown.png',
    'http://supereightstudio.com/img/pulldown_hover.png'
  ]);

});
</script>