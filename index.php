<!DOCTYPE html>
<html>
<head>
  <title>How to add calendar using jQuery and fullCalendar</title>
	<!--FullCalendar Dependencies-->
	<link href='fullcalendar/fullcalendar.css' rel='stylesheet' />
	<link href='fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
	
	<!--jQuery-->
	<script src='jquery/jquery-1.9.1.min.js'></script>
	<script src='jquery/jquery-ui-1.10.2.custom.min.js'></script>
	
	<!--FullCalendar-->
	<script src='fullcalendar/fullcalendar.min.js'></script>
	<script type="text/javascript">
		
		/*
			jQuery document ready
		*/
		
		$(document).ready(function()
		{
			/*
				date store today date.
				d store today date.
				m store current month.
				y store current year.
			*/
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			
			/*
				Initialize fullCalendar and store into variable.
				Why in variable?
				Because doing so we can use it inside other function.
				In order to modify its option later.
			*/
			
			var calendar = $('#calendar').fullCalendar(
			{
				/*
					header option will define our calendar header.
					left define what will be at left position in calendar
					center define what will be at center position in calendar
					right define what will be at right position in calendar
				*/
				header:
				{
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				/*
					defaultView option used to define which view to show by default,
					for example we have used agendaWeek.
				*/
				defaultView: 'agendaWeek',
				/*
					selectable:true will enable user to select datetime slot
					selectHelper will add helpers for selectable.
				*/
				selectable: true,
				selectHelper: true,
				/*
					when user select timeslot this option code will execute.
					It has three arguments. Start,end and allDay.
					Start means starting time of event.
					End means ending time of event.
					allDay means if events is for entire day or not.
				*/
				select: function(start, end, allDay)
				{
					/*
						after selection user will be promted for enter title for event.
					*/
					var title = prompt('Event Title:');
					/*
						if title is enterd calendar will add title and event into fullCalendar.
					*/
					if (title)
					{
						calendar.fullCalendar('renderEvent',
							{
								title: title,
								start: start,
								end: end,
								allDay: allDay
							},
							true // make the event "stick"
						);
					}
					calendar.fullCalendar('unselect');
				},
				/*
					editable: true allow user to edit events.
				*/
				editable: true,
				/*
					events is the main option for calendar.
					for demo we have added predefined events in json object.
				*/
				// AQUI PRECISAMOS TRAZER O VETOR MONTADO VINDO DIRETAMENTE DO BD
				events: [
                    /* perfil 1 */
					{
						title: 'Física P1',
                        start: new Date(2017, 3, 24, 8, 0),
                        allDay: false
					},
					{
						title: 'Física P2',
						start: new Date(2017, 4, 5, 8, 0),
                        allDay: false
					},
					{
						title: 'Física P3',
						start: new Date(2017, 5, 10, 8, 0),
                        allDay: false
					},
					{
						title: 'GAAL P1',
						start: new Date(2017, 5, 10, 14, 0),
                        allDay: false
					},
					{
						title: 'Noções de Economia P1',
						start: new Date(2017, 4, 10, 8, 0),
                        allDay: false
					},
					{
						title: 'Noções de Economia Sub',
						start: new Date(2017, 6, 10, 8, 0),
                        allDay: false
					},
					{
						title: 'Cálculo 1 P1',
						start: new Date(2017, 3, 25, 8, 0),
                        allDay: false
					},
					{
						title: 'Cálculo 1 P2',
						start: new Date(2017, 4, 7, 8, 0),
                        allDay: false
					},
					{
						title: 'Cálculo 1 P3',
						start: new Date(2017, 6, 19, 8, 0),
                        allDay: false
					},
					{
						title: 'Ética Seminários',
						start: new Date(2017, 4, 19, 8, 0),
                        allDay: false
					},
					{
						title: 'Ética Seminários',
						start: new Date(2017, 4, 26, 8, 0),
                        allDay: false
					},
					{
						title: 'Ética P1',
						start: new Date(2017, 5, 2, 8, 0),
                        allDay: false
					},
					{
						title: 'Ética Seminários',
						start: new Date(2017, 5, 30, 8, 0),
                        allDay: false
					},
					{
						title: 'Ética Seminários',
						start: new Date(2017, 6, 21, 8, 0),
                        allDay: false
					},
					{
						title: 'PAC P1',
						start: new Date(2017, 5, 29, 8, 0),
                        allDay: false
					},
					{
						title: 'Lógica P1',
						start: new Date(2017, 4, 12, 8, 0),
                        allDay: false
					},
					{
						title: 'Lógica P2',
						start: new Date(2017, 6, 7, 8, 0),
                        allDay: false
					},
					{
						title: 'Lógica Sub',
						start: new Date(2017, 6, 14, 8, 0),
                        allDay: false
                    },
                    /* perfil 3 */
                    {
						title: 'INSI P1',
						start: new Date(2017, 4, 9),
                    },
                    {
						title: 'ED1 P1',
						start: new Date(2017, 4, 25),
                    },
                    {
						title: 'POO P1',
						start: new Date(2017, 4, 29),
                    },
                    {
						title: 'INSI P2',
						start: new Date(2017, 5,27),
                    },
                    {
						title: 'POO P2',
						start: new Date(2017, 6, 3),
                    },
                    {
						title: 'ACP P1',
						start: new Date(2017, 6, 4),
                    },
                    {
						title: 'ED1 P2',
						start: new Date(2017, 6, 6),
                    },
                    {
						title: 'LabArq',
						start: new Date(2017, 6, 7),
                    },
                    {
						title: 'LabArq',
						start: new Date(2017, 6, 14),
                    },
                    {
						title: 'ED1 SAC',
						start: new Date(2017, 6, 13),
                    },
                    {
                        title: 'SeCot',
                        start: new Date(2017,4, 15, 8, 0),
                        end: new Date(2017, 4, 18, 18, 0)
                    }
                    /*
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d-3, 16, 0),
						allDay: false
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d+4, 16, 0),
						allDay: false
					},
					{
						title: 'Meeting',
						start: new Date(y, m, d, 10, 30),
						allDay: false
					},
					{
						title: 'Lunch',
						start: new Date(y, m, d, 12, 0),
						end: new Date(y, m, d, 14, 0),
						allDay: false
					},
					{
						title: 'Birthday Party',
						start: new Date(y, m, d+1, 19, 0),
						end: new Date(y, m, d+1, 22, 30),
						allDay: false
					},
					{
						title: 'Click for Google',
						start: new Date(y, m, 28),
						end: new Date(y, m, 29),
						url: 'http://google.com/'
                    }
                    */

				]
			});
			
		});

	</script>
	<style type="text/css">
		body
		{
			margin-top: 40px;
			text-align: center;
			font-size: 14px;
			font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}
		#calendar
		{
			width: 900px;
			margin: 0 auto;
		}
	</style>
</head>
<body>

	<!--FullCalendar container div-->
	<div id='calendar'></div>
	
</body>
</html>
