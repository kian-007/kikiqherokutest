(function($){
	$.fn.mychk = function(){
		return this.each(function(){
			$(this).click(function(){
				if(this.checked)
				{
					$(this).addClass('mychk')
					$(this).hide()
					if($(this).not('mychk'))
					{
					$(this).after("<img src='images/chk2.jpg' />")
					}
					$('.mychk').click(function(){
						$(this).find('img').remove()
						$(this).attr('checked' , false).show()
						$(this).removeClass('mychk')
					})
				}
			})
		})
	}
}(jQuery))