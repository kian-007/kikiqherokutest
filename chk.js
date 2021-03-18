(function($){
	$.fn.mychk = function(){
		return this.each(function(){
			$(this).click(function(){
				$(this).toggleClass('mychk')
				if($(this).hasClass('mychk'))
				{
					$(this).after("<img class='chk' src='images/chk2.jpg' />")
				}else{
					$(this).after("<img class='chk' src='images/chk3.jpg' />")
				}
			})
		})
	}
}(jQuery))