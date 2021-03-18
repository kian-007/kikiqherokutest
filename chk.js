(function($){
	$.fn.mychk = function(){
		return this.each(function(){
			$(this).click(function(){
				if(this.checked)
				{
					$(this).after("<img	class='mychk' src='images/chk2.jpg'	/>")
					$('.mychk').click(function(){
						$(this).attr('checked', false).show()
						$(this).remove()
					})
					$(this).hide()
				}
			})
		})
	}
}(jQuery))