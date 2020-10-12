(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		if( $('body.home').length )
		{
    		var mySubmitController = Marionette.Object.extend(
    		{
  				initialize: function()
				{
			    	this.listenTo( Backbone.Radio.channel( 'forms' ), 'submit:response', this.actionSubmit )
			  	},

			  	actionSubmit: function( response )
			  	{
			  		if(response.data.form_id == 2)
			  		{
				  		setCookie('registered','completed',30)
					  	//Register
					  	ga('send', 'event', 'VisitorAccess', 'Register')
			  		}
			  	},

			});
    	
    		new mySubmitController();

    		checkCookieHome();

		}

		else{

			checkCookieOther();
		}

		setTimeout(function(){
			if( $('body.vendor-template-default').length )
			{
				var url = location.pathname.replace(/^\/|\/$/g, '')

				var email = $('#nf-field-16').val();

				// console.log(email)

	    		var mySubmitControllerVendor = Marionette.Object.extend(
	    		{
	  				initialize: function()
					{
				    	this.listenTo( Backbone.Radio.channel( 'forms' ), 'submit:response', this.actionSubmit )
				  	},

				  	actionSubmit: function( response )
				  	{
				  		if(response.data.form_id == 3)
				  		{
				  			ga('send', 'event', 'ContactVendor', url, email)
				  		}
				  	},

				});
	    	
	    		new mySubmitControllerVendor();

			}
		}, 3000);





	function setCookie(cname, cvalue, exdays) {
	  var d = new Date();
	  d.setTime(d.getTime() + (exdays*24*60*60*1000));
	  var expires = "expires="+ d.toUTCString();
	  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function getCookie(cname) {
	  var name = cname + "=";
	  var ca = document.cookie.split(';');
	  for(var i = 0; i < ca.length; i++) {
	    var c = ca[i];
	    while (c.charAt(0) == ' ') {
	      c = c.substring(1);
	    }
	    if (c.indexOf(name) == 0) {
	      return c.substring(name.length, c.length);
	    }
	  }
	  return "";
	}

	function checkCookieOther() {
	  var username = getCookie("registered");
	  if (username != "") {

		$('body').show();	  
	  
	  } else {
	  	window.location = "/";
	  }
	}

	function checkCookieHome() {
	  var username = getCookie("registered");

	  $('body').show();
	  
	  if (username != "") {

	  	$('#return').show();
	  	
	  } else {
		
		$('#form').show();

	  }
	}

		
	});
	
})(jQuery, this);
