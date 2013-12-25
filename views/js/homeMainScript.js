// JavaScript Document
/*
* Some global variable
*/
var leftBarWidth = 221;

/*
* some functions needed
*/
function calculateContentSize(showRightPanel)
{
	
	if (showRightPanel)
		var rightPanel = 300;
	else
		var rightPanel = 0;
		
	if ($(window).width() > 800)
	{
		var mainContentWidth = $(window).width() - rightPanel;
		var pageContentWidth = mainContentWidth - leftBarWidth - 1;
		$('#main-content').css('width',mainContentWidth + 'px');
		$('#page-content').css('width',pageContentWidth + 'px');
		/*
			purple bar search box resize
		*/
		$('#purpleBar .search').css('width',mainContentWidth - 380+'px');
		$('#purpleBar .search-icon').css('margin-left',mainContentWidth - 400+'px');
		
	}
	else
	{
		var mainContentWidth = 800;
		var pageContentWidth = mainContentWidth - leftBarWidth;
		$('#main-content').css('width',mainContentWidth + 'px');
		$('#page-content').css('width',pageContentWidth + 'px');
		/*
			purple bar search box resize
		*/
		$('#purpleBar .search').css('width',mainContentWidth - 380+'px');
		$('#purpleBar .search-icon').css('margin-left',mainContentWidth - 400+'px');
	}
}

/*
* resize field input size
*/
function refreshFieldInputSize(fieldHolder)
{
	
	$(document).ready(function(){
		var highlightedWidth = 0;
		fieldHolder.find('.highlightLabel').each(function(){
			highlightedWidth += $(this).outerWidth(true);
		})
		var inputWidth = fieldHolder.width() - highlightedWidth - 80;
		fieldHolder.find('input.field-input').css({
			'width': inputWidth + 'px'
		});
	})
}
/*
* resize post content width
*/
function refreshPostContentWidth(postHolder, post)
{
	$(document).ready(function(){
		var width = 0;
		width = postHolder.width() - 286;
		post.css({
			'width': width + 'px',
		});
		post.find('.content').css({
			'width': width - 30 + 'px'
		});
		post.find('.content .video-holder').css({
			'width': width + 'px'
		});
		post.find('.content .video-holder').css({
			'width': width + 'px'
		});
		postHolder.css({
			'margin-top': '10px'
		});
	})
}
function refreshCommentWidth(post,cmt,ct)
{
	cmt.css('width', (post.width() - 50) + 'px');
	ct.css('width', post.width() - 80 + 'px');
	ct.find('input.cmt').css({
		'width': ct.width() - 20 + 'px'
	})
}

/*
*
*	content resize scripts
*
*/
$(document).ready(function(){
	$(window).on('resize load',function(){
		if (($(window).width() - 300) < 800)
		{
			// hide right panel when not have enough width
			$('#additional-part').hide();
			
			// calculate width of main-content
			calculateContentSize(false);
		}
		else
		{
			// show right panel
			$('#additional-part').show();
			
			// calculate width of main-content
			calculateContentSize(true);
		}
		refreshFieldInputSize($('.news-feed-poster .message-container .text-editors .field-holder'))
		refreshPostContentWidth($('.news-feed .aPost'),$('.news-feed .aPost .post-content'));
		refreshCommentWidth($('.news-feed .aPost .post-content'),$('.news-feed .aPost .post-content .comment-part'),$('.news-feed .aPost .post-content .comment-part .aComment  .ct'));
	})
	
	/*
	*
	* MENU scripts
	*
	*/
	$('.menu ul li').hover(function(){
		// handler when mouse in
		var top = $(this).offset().top + $(this).height() - ($(this).find('ul.sub:first').height() /2) + 2;
		var left = $(this).offset().left;
		var width = $(this).outerWidth(true);
		var subLeft = left + width + 1;
		var marginLeft = $(this).width() + 1;
		var marginTop = ($(this).find('ul.sub:first').height() + parseInt($(this).css('padding-top').replace('px','')))/2 + 4;
		$(this).find('ul.sub:first').css({
			'margin-left': marginLeft - 1 + 'px',
			'margin-top': - marginTop + 'px'		
		}).show();
		
		// calculate nail-sub
		/*
		var nailHeight = $(this).outerHeight();
		var marginTop = ($(this).find('.sub:first').outerHeight() - nailHeight) / 2 - 1;
		var bgLeft = 2;
		var bgTop = (nailHeight - 24)/2;
		$(this).find('.nail-sub').css({
			'height' : nailHeight + 'px',
			'marginTop' : marginTop + 'px',
			'background-position' : bgLeft + 'px '+ bgTop+'px'
		});
		*/
		
	},function(){
		// handler when mouse out
		$(this).find('ul.sub:first').hide();
	})
})

