Template={	//nazwa obiektu
	burger : function(){		//nazwa metody, wykonywana funkcja bez parametrów
		jQuery("body > header nav").toggleClass("lista");			//nazwa jQuery i do czego ma się odnosić. do addclass/toggleClass to akcja, w nawiasie wprowadzam nazwę jaka będzie jako dodana klasa
	},
	ulubione : function(){		//nazwa metody, wykonywana funkcja bez parametrów
		//jQuery("body > section .category .center .right ul li div.rights ul > li ").toggleClass("clicked");	
		linklong = jQuery("body > section .category .center .right ul li div.rights ul > li a");
		linklong.click(function(){
			linklong.parent().removeClass("clicked");
			
			jQuery(this).parent().toggleClass("clicked");
			return false;
		});
		//nazwa jQuery i do czego ma się odnosić. do addclass/toggleClass to akcja, w nawiasie wprowadzam nazwę jaka będzie jako dodana klasa
	},
slider:function(){
		jQuery('body > section div.slider').owlCarousel({
		items:1,
		loop:false,
		autoplay: true,
		autoplayTimeout: 5000,
		rewind: true,
		dots:true,
		nav: true,
		})
		
	jQuery('body > section ul.programs').owlCarousel({
		loop:true,
		autoplay: true,
		autoplayTimeout: 2000,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			800:{
				items:3
			},
			1150:{
				items:4
			}
		}
	})
	
}
		
}
