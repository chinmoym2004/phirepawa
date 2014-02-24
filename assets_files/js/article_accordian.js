var currentArticle=null;
var container = '.aco';
var article= '.main-ar';
var title='.titl-ar';
var detail='.arcontent'


$(document).ready(function(){
						   
							$(container).find(article).each(function(n){
																	 	$(this).find(detail).eq(0).attr('id','detail_'+n);
																		$(this).find(title).eq(0).attr('id','title_'+n);
																	 	$(this).find(detail).eq(0).hide();
																	    $(this).find(title).eq(0).css('cursor','pointer');
																	    
																		
																		$(this).find(title).eq(0).bind('click',function(){
																		
																		var t = $(this).attr('id').split("_")[1];
																		if(currentArticle!=null)
																		{
																		 var c_n = currentArticle.attr('id').split('_')[1];
																		 if(c_n!=t){
																		 currentArticle.slideUp('slow');	
																		 }
																		}
																		
																		detail = $('#detail_'+t)
																		
																		detail.slideDown('slow');	
																		currentArticle = detail;			
																														  
																														  });
																	  
																	  
																	   });
							
						   });




