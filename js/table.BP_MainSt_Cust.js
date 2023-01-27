
/*
 * Editor client script for DB table BP_MainSt_Cust
 * Created by http://editor.datatables.net/generator
 * Modified by Graham Robinson - StudioX.tv
 */



(function($){

// start doc ready
$(document).ready(function() {

var LogOld = "";
var LogString = "";
var LogCardCount = "";
var LogStampCount = "";




	function CountPoints() {
		// set cards badge to the value in the textbox
		var FullCards = $('#DTE_Field_points').val();
		
		//update log
		LogCardCount = FullCards;

		//update badge
		$('span.badge.badge-light.CardsBadgeSpan').text(FullCards);	
	}

// add and memove point fuctions
function AddPoint() {
	$('#DTE_Field_points').val( function(i, oldval) {
		return ++oldval;
	});

	// recount point totlals and update badge
	CountPoints();
}


function RemovePoint() {
	$('#DTE_Field_points').val( function(i, oldval) {
		return --oldval;
	});
}	




function CountStampsChecked() {
	//count the stamps checked
	var StampsChecked = $("#stamps input[type='checkbox']").filter(':checked').length;

	// log results
	//console.log(StampsChecked);
	LogStampCount = StampsChecked;

	//built log string
	var now = new Date().toString();
	var NowFormatted = moment(now).format('MM/DD/YYYY h:mm a'); // 08/20/2014 3:30 pm
	LogString = LogOld + NowFormatted + " - " + LogCardCount + " Cards and " + LogStampCount + " stamps" +  "\n";
	console.log(LogString); 

	// set the new log feild
	$('#DTE_Field_history').val(LogString);



	// write the results to stamps badge
	$('span.badge.badge-light.StampsBadgeSpan').text(StampsChecked);


	//check if card is full - if so then empty the card and add to total cARDS
	if (StampsChecked == "20")
	{
		//console.log("there are 20 stamps!!!")
		// add a point to the cards
		AddPoint();
		$("#stamps input[type='checkbox']").prop('checked', false);
		//clear the current card
		CountStampsChecked();
		CountPoints();

	}
}

function ClearLog() {
	// clear log and vars
	LogOld = "";
	LogString = "";
}



// watch for changes to stamps div and update total on badge

  $('#stamps').on('click', function (event) {
	if (event.target != this) {
	  //alert('You clicked a descendent of #container.');
	  CountStampsChecked();
	  CountPoints();
	} 
  });

  $( '#stamps' ).keyup(function() {
	//console.log( "Handler for .keypress() called." );
	CountPoints();
	CountStampsChecked();
  });



		$(".ClearStamps").on('click', function(){
		
			console.log("slClearing stamps and incrementing cards total");

			//uncheck all stamps
		  $("#stamps input[type='checkbox']").prop('checked', false);
		  // $("#stamps input[type='checkbox']").prop('checked', $(this).prop('checked'));

			  //count stamps and update page
			  
			AddPoint();  
			CountStampsChecked();
		});


		//clear log when button is preessed
		$(".ClearLog").on('click', function(){
			
			// clear vars
			ClearLog();

			//clear history field value
			$('#DTE_Field_history').val("");

			//alert("Log cleared");
		});




	var editor = new $.fn.dataTable.Editor( {
		ajax: 'php/table.BP_MainSt_Cust.php',
		table: '#BP_MainSt_Cust',
		template: '#customForm',
		fields: [
			{
				"label": "First Name:",
				"name": "firstname"
			},
			{
				"label": "Surname:",
				"name": "lastname"
			},
			{
				"label": "Email:",
				"name": "email"
			},
			{
				"label": "Newsletter:",
				"name": "newsletter",
				"type": "radio",
				"options": [
					"Yes",
					" No"
				]
			},
			{
				"label": "Stamps:",
				"name": "stamps",
				"type": "checkbox",
				"separator": ",",
				"options": [
					"1",
					"2",
					"3",
					"4",
					"5",
					"6",
					"7",
					"8",
					"9",
					"10",
					"11",
					"12",
					"13",
					"14",
					"15",
					"16",
					"17",
					"18",
					"19",
					"20"
				]
			},
			{
				"label": "CardsChecked:",
				"name": "cards",
				"type": "checkbox",
				"separator": ",",
				"options": [
					"1",
					"2",
					"3",
					"4",
					"5",
					"6",
					"7",
					"8",
					"9",
					"10",
					"11",
					"12",
					"13",
					"14",
					"15",
					"16",
					"17",
					"18",
					"19",
					"20"
				]
			},
			{
				"label": "Full Cards:",
				"attr": {
					type: "number"
				  },
				"name": "points",
				"def": "0"
				
			},
			{
				"label": "History:",
				"type":  "textarea",
				"name": "history"
			}
		]
	} );

	var table = $('#BP_MainSt_Cust').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.BP_MainSt_Cust.php',
		columns: [
			
			{
				"data": "lastname"
			},
			
			{
				"data": "firstname"
			},

			{
				"data": "email"
			},
			{
				"data": "newsletter"
			},
			{
				"data": "points"
			}
		],
		select: true,
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor },
			{ extend: 'csvHtml5', editor: editor },
			{ 
				text: 'Logout', 
				action: function ( e, dt, node, config ) {
					// send user to logout page
					$(location).attr('href','logout.php');
				}
			}
		]
	} );

	// first editor load events
	editor.one( 'open', function ( e, type ) {
		// Type is 'main', 'bubble' or 'inline'
		//alert( 'Editor '+type+' form shown' );
		//alert( "This will be displayed only once." );

		// wrap stamps
		$( ".StampsContainer label" ).not(":first").wrap( "<div class='state success-o'></div>" );

		// wrap cards
		$( ".CardsContainer label" ).not(":first").wrap( "<div class='state success-o'></div>" );
		$( "<img class='svg' src='svg/growler.svg'>" ).prependTo( ".StampsContainer .state" );
		$( "<img class='svg' src='svg/card.svg'>" ).prependTo( ".CardsContainer .state" );
		$( ".StampsContainer div > div > div > div > div, .CardsContainer div > div > div > div > div" ).addClass( "pretty p-svg p-jelly p-round p-bigger InputSize" );

				// set history to readonly
				//$("#DTE_Field_history").readOnly = true;
				$('#DTE_Field_history').prop('readonly', true);



	} );

	//editor load eevents
	editor.on( 'open', function ( e, type ) {
		// Type is 'main', 'bubble' or 'inline'
		//alert( 'Editor '+type+' form shown' );

		 ClearLog();
		 // set the old value of the log 
		 // LogOld = $('#DTE_Field_history').val();
		// dshgkj hjks
		LogOld = editor.get('history');
		//alert(LogOld);

				//count stamps and card point and update badges
				CountStampsChecked();
				CountPoints();

	} );

		//editor submit  eevents
		editor.on( 'submitSuccess', function ( e, type ) {
			//clear log variables
			ClearLog();
			//alert ("Success!")
	
		} );





//$( "#BP_MainSt_Cust_wrapper > div.dt-buttons > button.dt-button.buttons-selected.buttons-edit" ).click(function() {
 // alert( "Click" );
//  $( ".StampsContainer label" ).wrap( "<div class='state'></div>" );
//  $( ".StampsContainer div > div > div > div > div" ).addClass( "pretty p-default" );
//});

//fix up checkboxes when edit clicked
$( "#BP_MainSt_Cust_wrapper > div.dt-buttons > button.dt-button.buttons-selected.buttons-edit" ).one( "click", function() {

  });



// get points of prize selected
    $('select.redeem-prize.selectpicker.form-control.form-control-lg').change(function() {
        var PointsValue = $('select.redeem-prize.selectpicker.form-control.form-control-lg').find(':selected').data('points');
		$('.points-input').val(PointsValue);
		alert(PointsValue);
		alert("test");
    });





// end document ready
} );




}(jQuery));

