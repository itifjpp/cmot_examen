// example: double tour
// version: lite
$(document).ready(function($){
	$.powerTour({
		tours : [		
			// tour 1
			{
				trigger            : '#powertour-demo-trigger-id-1',
				startWith          : 1,
				easyCancel         : true,
				escKeyCancel       : true,
				scrollHorizontal   : false,
				keyboardNavigation : true,
				loopTour           : false,
				highlightStartSpeed: 200,
				highlightEndSpeed  : 200,
				onStartTour        : function(ui){ },
				onEndTour          : function(ui){ },	
				onProgress         : function(ui){ },
				steps : [
					  {
						  hookTo          : '#powertour-demo-box-1',
						  content         : '#step-id-1',
						  width           : 400,
						  position        : 'bm',
						  offsetY         : 20,
						  offsetX         : 0,
						  fxIn            : 'flipInX',
						  fxOut           : 'bounceOutLeft',
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollSpeed     : 400,
						  scrollEasing    : 'swing',
						  scrollDelay     : 0,
						  highlight       : false,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){},
						  onHideStep      : function(ui){ }
					  },
					  {
						  hookTo          : '#powertour-demo-box-2',
						  content         : '#step-id-2',
						  width           : 300,
						  position        : 'lt',
						  offsetY         : 0,
						  offsetX         : 20,
						  fxIn            : 'fadeIn',
						  fxOut           : 'fadeOut',
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollSpeed     : 400,
						  scrollEasing    : 'swing',
						  scrollDelay     : 0,
						  highlight       : true,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){},
						  onHideStep      : function(ui){ }
					  },
					  {
						  hookTo          : '#powertour-demo-box-3',
						  content         : '#step-id-3',
						  width           : 400,
						  position        : 'tr',
						  offsetY         : -80,
						  offsetX         : 40,
						  fxIn            : 'rotateIn',
						  fxOut           : 'rotateOut',
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollSpeed     : 400,
						  scrollEasing    : 'swing',
						  scrollDelay     : 0,
						  highlight       : false,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){},
						  onHideStep      : function(ui){ }
					  }		
				]
			},
			//tour 2
			{
				trigger            : '#powertour-demo-trigger-id-2',
				startWith          : 1,
				easyCancel         : true,
				escKeyCancel       : true,
				scrollHorizontal   : false,
				keyboardNavigation : true,
				loopTour           : false,
				highlightStartSpeed: 200,
				highlightEndSpeed  : 200,
				onStartTour        : function(ui){ },
				onEndTour          : function(ui){ },	
				onProgress         : function(ui){ },
				steps : [
					{
						hookTo          : '#powertour-demo-box-4',
						content         : '#step-id-4',
						width           : 400,
						position        : 'rt',
						offsetY         : 0,
						offsetX         : 20,
						fxIn            : 'flipInX',
						fxOut           : 'bounceOutLeft',
						showStepDelay   : 0,
						center          : 'step',
						scrollSpeed     : 400,
						scrollEasing    : 'swing',
						scrollDelay     : 0,
						highlight       : true,
						keepHighlighted : true,
						keepVisible     : false,
						onShowStep      : function(ui){},
						onHideStep      : function(ui){ }
					},
					{
						hookTo          : '#powertour-demo-box-5',
						content         : '#step-id-5',
						width           : 400,
						position        : 'bm',
						offsetY         : 20,
						offsetX         : 0,
						fxIn            : 'flipInX',
						fxOut           : 'bounceOutLeft',
						showStepDelay   : 0,
						center          : 'step',
						scrollSpeed     : 400,
						scrollEasing    : 'swing',
						scrollDelay     : 0,
						highlight       : true,
						keepHighlighted : true,
						keepVisible     : false,
						onShowStep      : function(ui){},
						onHideStep      : function(ui){ }
					}
				]
			}
		]
	});	
});