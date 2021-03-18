(function($){
	$.fn.mychk = function(){
		return this.each(function(){
			$(this).click(function(){
				if(this.checked)
				{
					$(this).hide()
					$(this).after("<img class='mychk' src='chk2.jpg' />")
					$('.mychk').click(function(){
						$(this).prev('input[type="checkbox"]').attr('checked' , false).show()
						$(this).remove()
					})
				}
			})
		})
	}
}(jQuery))