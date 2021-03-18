(function($){
	$.fn.mychk = function(){
		return this.each(function(){
			$(this).click(function(){
				$(this).toggleClass('checked')

				
				if($(this).hasClass('checked')){
					$(this).next('.mychk').hide()
					$(this).after('<img class="mychk" src="images/chk2.jpg" />')
					$(this).attr('checked' , true)
					
				}else{
					$(this).next('.mychk').hide()
					$(this).after('<img class="mychk" src="images/chk3.jpg" />')
					$(this).attr('checked' , false)
				}
				
			
			})
			
			
			
			$(this).next('.mychk').click(function(){
				$(this).toggleClass('checked')
				if($(this).hasClass('checked')){
					$(this).attr('src' , "images/chk2.jpg")
					$(this).prev('input').attr('checked' , true)
				}else{
					$(this).attr('src' , "images/chk3.jpg")
					$(this).prev('input').attr('checked' , false)
				}
			})
		})
	}
}(jQuery))