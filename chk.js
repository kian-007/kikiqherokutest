(function($){
	$.fn.mychk = function(){
		return this.each(function(){
			$(this).click(function(){
				if(this.checked)
				{
					$(this).hide()
					$(this).after("<img class='mychk' src='mychk.png' />")
					$('.mychk').click(function(){
						$('input[checkbox]').attr('checked' , false).show()
						$(this).remove()
					})
				}
			})
		})
	}
}(jQuery))