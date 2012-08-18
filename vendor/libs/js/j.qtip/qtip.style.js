$(document).ready(function()
{
   $('#clickme').qtip(
   { id: 'modal',content: {text: $('div:hidden'),title: {text: 'About',button: true
}
      },
      position: {
         my: 'center', // ...at the center of the viewport
         at: 'center',
		 type: 'absolute',
		 target: $(window)
      },
	  adjust: { resize: true },
      show: {
         event: 'click', // Show it on click...
         solo: true, // ...and hide all other tooltips...
         modal: true // ...and make it modal
      },
      hide: false,
      style: 'ui-tooltip-light ui-tooltip-rounded'
   });
});