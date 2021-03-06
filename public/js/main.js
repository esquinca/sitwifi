jQuery(function($){
	$('#btncollapzion').Collapzion({
					_child_attribute:[
							{
								'label':'Contáctanos',
								'url':'#contact',
								'icon':'&#xE0B0;'
							},
							{
							'label':'Español',
							'url':'#',
							'icon':'&#xE80B;'
							},
							{
							'label':'English',
							'url':'#',
							'icon':'&#xE80B;'
							},
					],
					_pos: {
			    'width':'100%',
			    'min-height':'13%',
			    'position':'fixed',
			    'right':'0',
			    'left': '-20px',
			    'bottom': '-20px',
			    'text-align':'center',
			    'padding': '0px 8px',
			    'display':'block',
			    'margin-bottom':'4px'
			  },
					_main_btn_color:'#09347A;',
					_child_btn_color:'#F15D22;',
		});
	});


	//Slider
	$(document).ready(function() {
		var time = 7; // time in seconds

	 	var $progressBar,
	      $bar,
	      $elem,
	      isPause,
	      tick,
	      percentTime;

	    //Init the carousel
	    $("#main-slider").find('.owl-carousel').owlCarousel({
	      slideSpeed : 500,
	      paginationSpeed : 500,
	      singleItem : true,
	      navigation : true,
			navigationText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
			],
	      afterInit : progressBar,
	      afterMove : moved,
	      startDragging : pauseOnDragging,
	      //autoHeight : true,
	      transitionStyle : "fadeUp"
	    });

	    //Init progressBar where elem is $("#owl-demo")
	    function progressBar(elem){
	      $elem = elem;
	      //build progress bar elements
	      buildProgressBar();
	      //start counting
	      start();
	    }

	    //create div#progressBar and div#bar then append to $(".owl-carousel")
	    function buildProgressBar(){
	      $progressBar = $("<div>",{
	        id:"progressBar"
	      });
	      $bar = $("<div>",{
	        id:"bar"
	      });
	      $progressBar.append($bar).appendTo($elem);
	    }

	    function start() {
	      //reset timer
	      percentTime = 0;
	      isPause = false;
	      //run interval every 0.01 second
	      tick = setInterval(interval, 10);
	    };

	    function interval() {
	      if(isPause === false){
	        percentTime += 1 / time;
	        $bar.css({
	           width: percentTime+"%"
	         });
	        //if percentTime is equal or greater than 100
	        if(percentTime >= 100){
	          //slide to next item
	          $elem.trigger('owl.next')
	        }
	      }
	    }

	    //pause while dragging
	    function pauseOnDragging(){
	      isPause = true;
	    }

	    //moved callback
	    function moved(){
	      //clear interval
	      clearTimeout(tick);
	      //start again
	      start();
	    }
	});
