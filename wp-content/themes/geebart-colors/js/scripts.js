jQuery(document).ready(function($){

//var app = angular.module('geebStyles', []);

var theme = 'classic';
var themes = new Array();
var removeThemeClasses;
var testJSON;
var themesJSON = {};
var themesHTML = {};

$body = $('body');
$footer = $body.find('footer');
$hero = $body.find('#hero');
$themeStyles = $body.children('#theme-styles');
$themeTemplate = $body.children('#theme-template');
$themeTemplatePaint = $body.children('#theme-styles');
$content = $body.find('#content');
$sidebar = $body.find('#sidebar');
$nav = $body.children('nav');
$searchInput = $nav.find('#search-text');
$settingsToggle = $nav.find('#settings-toggle');
$settingsDropdown = $settingsToggle.find('.dropdown');
$mobileToggle = $nav.find('#mobile-nav-toggle');
$mainNav = $nav.find('#main-nav');
$settingsNav = $body.children('#settings-nav');
$settings = $settingsNav.find('#settings');
$buildLayer = $settings.children('#build-layer');
$buildColorSelection = $buildLayer.children('#color-selection');
$colorValue = $buildColorSelection.find('#color-value');
$colorTarget = $buildColorSelection.children(':first-child').find('.checked');
var color;

$('#geeb-logo').children().each(function(){
	$(this).addClass('nth-child-'+($(this).index()+1));
});

$themes = $settings.find('#themes');

/*$('#color-picker > div').spectrum({
	flat: true,
	showInput: true,
    color: '#000',
    move: function(color) {
        $colorTarget.css('background', color).attr('data', color);
    }
});*/

//Select a Random Theme
random = Math.ceil(Math.random()*($themes.children().length-1));

light = 30;
dark = -27;
trans = 0.8;
value = 0;

themeTemplate = _.template($themeTemplate.html().replace(/\t+/g, " "));

function hexToRgb(hex){
    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
        return r + r + g + g + b + b;
    });

    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
}

function sanatizeRGB(rgbArray, value){
	if(value == null || value == 'undefined'){
		value = 0;
	}
	//Sanatize Array Just In Case
	if(rgbArray['r'] == null || rgbArray['r'] == 'undefined'){
		//console.log('FIRE!');
		var fixArray = {};
		for(var i = 0; i < rgbArray.length; ++i){
			switch(i){
				case 0:
					index = 'r';							
				break;
				case 1:
					index = 'g';							
				break;
				case 2:
					index = 'b';							
				break;
			}					
			fixArray[index] = rgbArray[i];
		}
		rgbArray = fixArray;
	}
	$.each(rgbArray, function(i, v){
		rgbArray[i] = (parseInt(v.toString().replace('rgb(', '').replace(')', ''))+value);
		if(rgbArray[i] > 255){
			rgbArray[i] = 255;
		}
		if(rgbArray[i] < 0){
			rgbArray[i] = 0;
		}
	});
	return rgbArray;
}

function printRGB(rgbArray){
	rgbArray = sanatizeRGB(rgbArray);
	return 'rgb(' + rgbArray['r'] + ',' + rgbArray['g'] + ',' + rgbArray['b'] + ')';
}

function printRGBA(rgbArray, trans){
	rgbArray = sanatizeRGB(rgbArray);
	return 'rgba(' + rgbArray['r'] + ', ' + rgbArray['g'] + ', ' + rgbArray['b'] + ', ' + trans + ')';
}

function bright(rgbArray, value){
	rgbArray = sanatizeRGB(rgbArray, value);
	return 'rgb(' + rgbArray['r'] + ',' + rgbArray['g'] + ',' + rgbArray['b'] + ')';
}

function combinedRGBValue(rgbArray){
	rgbArray = sanatizeRGB(rgbArray, value);
	return rgbArray['r'] + rgbArray['g'] + rgbArray['b'];
}

$(document).on('click touchend', '#mobile-nav-toggle', function(event){
	event.preventDefault();
	if($(this).hasClass('active') == true){
		$(this).removeClass('active');
		$mainNav.removeClass('active');
		//$content.removeClass('blur');
	} else{
		$(this).addClass('active').siblings('a').removeClass('active');
		$mainNav.addClass('active');
		$settingsNav.removeClass('active');
		//$content.addClass('blur');
	}
}).on('click touchend', '#settings-toggle', function(event){
	event.preventDefault();
	$settingsDropdown.removeClass('active');
	if($(this).hasClass('active') == true){
		$(this).removeClass('active');
		$settingsNav.removeClass('active');
		//$content.removeClass('blur');
	} else{
		$(this).addClass('active').siblings('a').removeClass('active');
		$settingsNav.addClass('active');
		$mainNav.removeClass('active');
		//$content.addClass('blur');
	}
}).on('click touchend', '#themes > li > a', function(event){
	event.preventDefault();
	theme = $(this).attr('data');
	$(this).parent().addClass('active').siblings().removeClass('active');
	$body.removeClass(removeThemeClasses).addClass(theme);
	$themeTemplatePaint.html(themesHTML[theme]);
}).on('click touchend', '.switch-layer', function(event){
	event.preventDefault();
	$settings.attr('class', '').addClass($(this).attr('id'));
}).on('click touchend', '#build-layer > ul > li > a.color-link', function(event){
	event.preventDefault();
	if(!$(this).parent().parent().hasClass('active')){
		$(this).parent().addClass('active').siblings().removeClass('active').parent().addClass('active');
		$colorTarget = $(this).find('checked');
		$colorTarget.removeClass('checked');
	}
}).on('click touchend', '#save-palette', function(event){
	event.preventDefault();
	if($buildColorSelection.children('.picked').length == 3){

	} else{
		var $active = $buildColorSelection.children('.active:not("#color-picker")');
		var index = $active.index();
		var length = $buildColorSelection.children().length;
		$active.addClass('picked').removeClass('active');
		if(index == length-2){
			$active = $buildColorSelection.children(':first-child');
		} else{
			$active = $active.next();
		}
		$active.addClass('active picked').siblings(':not("#color-picker")').removeClass('active');
		$colorTarget = $active.find('checked');
		$colorTarget.removeClass('checked');
	}
}).on('propertychange keyup input paste', '#color-value', function(){
	//console.log('FIRE!');
});

$.getJSON(templateDirectory + '/json/themes.json', function(data, status, xhr){
	if(status == 'success'){
		$.each(data, function(index, value){
			themes.push(index);
			removeThemeClasses = themes.join(' ');
			theme = index;
			//Create Additional Colors For Each Theme
			themesJSON[theme] = {};
			themesJSON[theme]['theme'] = theme;
			themesJSON[theme]['primary'] = value.primary;
			themesJSON[theme]['primaryTransparent'] = printRGBA(hexToRgb(value.primary), .9);
			themesJSON[theme]['primaryDark'] = bright(hexToRgb(value.primary), dark);
			themesJSON[theme]['primaryExtraDark'] = bright(themesJSON[theme]['primaryDark'].split(','), dark);
			themesJSON[theme]['primaryLight'] = bright(hexToRgb(value.primary), light);
			themesJSON[theme]['primaryExtraLight'] = bright(themesJSON[theme]['primaryLight'].split(','), light*3);
			themesJSON[theme]['secondary'] = value.secondary;
			themesJSON[theme]['secondaryDark'] = bright(hexToRgb(value.secondary), dark);
			themesJSON[theme]['secondaryExtraDark'] = bright(themesJSON[theme]['secondaryDark'].split(','), dark);
			themesJSON[theme]['secondaryLight'] = bright(hexToRgb(value.secondary), light);
			themesJSON[theme]['secondaryExtraLight'] = bright(themesJSON[theme]['secondaryLight'].split(','), light*3);
			themesJSON[theme]['secondaryUltraLight'] = bright(themesJSON[theme]['secondaryExtraLight'].split(','), light);
			themesJSON[theme]['tertiary'] = value.tertiary;
			themesJSON[theme]['tertiaryDark'] = bright(hexToRgb(value.tertiary), dark);
			themesJSON[theme]['tertiaryLight'] = bright(hexToRgb(value.tertiary), light);
			themesJSON[theme]['quaternary'] = value.quaternary;
			themesJSON[theme]['quaternaryDark'] = bright(hexToRgb(value.quaternary), dark);
			themesJSON[theme]['quaternaryLight'] = bright(hexToRgb(value.quaternary), light);
			themesJSON[theme]['quaternaryLight'] = bright(hexToRgb(value.quaternary), light);
			themesJSON[theme]['screen'] = printRGBA(themesJSON[theme]['primaryDark'].split(','), .75);
			if(combinedRGBValue(hexToRgb(themesJSON[theme].primary)) > 381){
				themesJSON[theme]['modalBackground'] = themesJSON[theme]['primaryExtraLight'];
				themesJSON[theme]['modalFontColor'] = themesJSON[theme]['secondaryDark'];
				themesJSON[theme]['modalHoverColor'] = themesJSON[theme]['secondaryExtraDark'];
				themesJSON[theme]['modalHeaderBackground'] = themesJSON[theme]['secondaryExtraDark'];
				themesJSON[theme]['modalHeaderColor'] = themesJSON[theme]['primaryExtraLight'];
			} else{
				themesJSON[theme]['modalBackground'] = themesJSON[theme]['primaryExtraDark'];
				themesJSON[theme]['modalFontColor'] = themesJSON[theme]['secondaryLight'];
				themesJSON[theme]['modalHoverColor'] = themesJSON[theme]['secondaryExtraLight'];
				themesJSON[theme]['modalHeaderBackground'] = themesJSON[theme]['secondaryExtraLight'];
				themesJSON[theme]['modalHeaderColor'] = themesJSON[theme]['primaryExtraDark'];
			}
			themesHTML[theme] = themeTemplate(themesJSON[theme]);
		});
		window.setTimeout(function(){
			theme = themes[random];
			$selectTheme = $themes.children('#'+theme);
			if($selectTheme){
				$selectTheme.children('a').trigger('click');
			} else{
				$themeTemplatePaint.html(themesHTML[theme]);
			}
			$body.removeClass('preload');
		}, 300);
	} else{
		console.log('REQUEST FAILED!');
	}

	//Grab Search HTML
	searchHTML = $('#search-wrap').html();

	//Trigger FancyInput
	$('#search-form > #search-text').fancyInput();

	$(document).on('focus', '#search-text', function(event){
		$(this).parent().parent().addClass('focus');
	});
	$(document).on('blur', '#search-text', function(event){
		$(this).parent().parent().removeClass('focus');
	});

		//LOGO CLICK
		$(document).on('click touchend', '#geeb-logo', function(event){
			$(this).removeClass('active');
			window.setTimeout(function(){
				$(this).addClass('active');
				window.location = rootURL;
			}, 1250);
		});

		//MODAL SCREENS ACTIVE
		$(document).on('click touchend', '.close-modal', function(event){
			event.preventDefault();
			$(this).parent().parent().parent().parent().parent().removeClass('active');
			$settingsToggle.removeClass('active');
			$mobileToggle.removeClass('active');
		});

		$(document).on('click touchend', '#search-text', function(event){
			if($(this).val() == 'search geebart.com'){
				$(this).select();
			}
		});

		$(document).on('submit touchend', '#search-form', function(event){
			event.preventDefault();
			if(!$searchInput.val()){
				$searchInput.select();
			} else{
				window.location = rootURL + '?s=' + $(this).find('#search-text').val();
			}
		});

		function findLazy(){
			if($body.hasClass('ie8')){
			    $content.find('.lazy:in-viewport').each(function(){
	    			$(this).removeClass('lazy').siblings('.backstretch').backstretch($(this).attr('data-lazy'));
	    		});
	    		if($sidebar){
					$sidebar.find('.lazy:in-viewport').each(function(){
						$(this).removeClass('lazy').siblings('.backstretch').backstretch($(this).attr('data-lazy'));
					});
				}
			} else{
				$content.find('.lazy:in-viewport').each(function(){
					$(this).css('backgroundImage', 'url(' + $(this).attr('data-lazy') + ')').removeClass('lazy');
				});
				if($sidebar){
					$sidebar.find('.lazy:in-viewport').each(function(){
						$(this).css('backgroundImage', 'url(' + $(this).attr('data-lazy') + ')').removeClass('lazy');
					});
				}
			}
		}

		function findFeatured(){
			$content.find('.featured:in-viewport').each(function(){
				$(this).addClass('active');
			});
		}
		
		function findFooter(){
			$footer.find('.listing:in-viewport').each(function(){
				$(this).addClass('active');
			});
		}

		//ANIMATE LOGO ON LOAD
		window.setTimeout(function(){
			$('#geeb-logo').addClass('active');
			if($hero){
				$slides = $hero.find('.slide');
				slidesLength = $slides.length;
				randomSlide = Math.floor((Math.random() * slidesLength)+1);
				$hero.find('.slide:nth-child(' + randomSlide + ')').addClass('active');
				findLazy();
				findFeatured();
				window.setTimeout(function(){
					$settingsDropdown.addClass('active');
				}, 600);
			}
			findFooter();
		}, 1200);

		//WINDOW SCROLL EVENTS
		$(window).scroll(function(){
			findLazy();
			findFeatured();
			findFooter();
		});
	});

});