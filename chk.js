(function($){
	$.fn.mychk = function(){
		return this.each(function(){
			$(this).click(function(){
				if(this.checked)
				{
					$(this).addClass('mychk')
					$(this).hide()
					if($(this).hasClass('mychk'))
					{
					$(this).after("<img src='images/chk2.jpg' />")
					}
					$('.mychk').click(function(){
						$(this).find('img').remove().removeClass('mychk')
						$(this).attr('checked' , false).show()
					})
				}
			})
		})
	}
}(jQuery))