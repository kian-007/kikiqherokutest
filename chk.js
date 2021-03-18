(function($){
	$.fn.mychk = function(){
		return this.each(function(){
			$(this).click(function(){
				$(this).toggleClass('mychk')
				if($(this).hasClass('mychk'))
				{
					$(this).find('.chk').remove()
					$(this).after('<img class="chk" src="images/chk2.jpg" />')
				}else{
					$(this).find('.chk').remove()
					$(this).after('<img class="chk" src="images/chk3.jpg" />')
				}
			})
		})
	}
}(jQuery))