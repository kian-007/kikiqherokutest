(function($){
	$.fn.mychk = function(){
		return this.each(function(){
			$(this).click(function(){
				if(this.checked)
				{
					$(this).hide()
					$(this).after("<img class='mychk' src='images/chk2.jpg' />")
					$('.mychk').click(function(){
						$(this).prev('input[type="checkbox"]').attr('checked' , false)
						$(this).remove()
						$(this).prev('input[type="checkbox"]').show()
					})
				}
			})
		})
	}
}(jQuery))