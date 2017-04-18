<!DOCTYPE html>
<html>
<head>
  <title>Calendário Geral - Computação UFSCar Sorocaba</title>
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
				defaultView: 'month',
				/*
					selectable:true will enable user to select datetime slot
					selectHelper will add helpers for selectable.
				*/
				selectable: false,
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
				editable: false,
				/*
					events is the main option for calendar.
					for demo we have added predefined events in json object.
				*/
				eventSources: [
				{
					events: [
                    /* perfil 1 */
					{
						title: 'Física P1',
                        start: new Date(2017, 4, 24, 8, 0),
                        allDay: false
					},
					{
						title: 'Física P2',
						start: new Date(2017, 5, 5, 8, 0),
                        allDay: false
					},
					{
						title: 'Física P3',
						start: new Date(2017, 6, 10, 8, 0),
                        allDay: false
					},
					{
						title: 'GAAL P1',
						start: new Date(2017, 4, 10, 14, 0),
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
						start: new Date(2017, 4, 25, 8, 0),
                        allDay: false
					},
					{
						title: 'Cálculo 1 P2',
						start: new Date(2017, 5, 7, 8, 0),
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
                    }],
                    backgroundColor: '#3498DB'
                },
                /* perfil 3 */
                {
                	events: [
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
						title: 'Arq P1',
						start: new Date(2017, 3, 20),
                    },
                    {
						title: 'Arq P2',
						start: new Date(2017, 5, 1),
                    },
                    {
						title: 'Arq P3',
						start: new Date(2017, 6, 6),
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
						title: 'Grafos P1',
						start: new Date(2017, 4, 8),
                    },
                    {
						title: 'Grafos P2',
                        start: new Date(2017, 5, 12),
                    },
                    {
						title: 'Grafos P3',
						start: new Date(2017, 6, 10),
                    },
                    {
						title: 'Complexidade P1',
						start: new Date(2017, 4, 3),
                    },
                    {
						title: 'Complexidade P2',
						start: new Date(2017, 5, 7),
                    },
                    {
						title: 'Complexidade P3',
						start: new Date(2017, 6, 5),
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
                    */],
                    backgroundColor: '#26B99A'
                },
                {
                    /* perfil 5 */
                    events: [
                    {
                        title: 'ES2 Entrega Intermediária',
                        start: new Date(2017, 4, 2, 14, 0),
                        allDay: false
                    },
                    {
                        title: 'Redes P1',
                        start: new Date(2017, 4, 10, 10, 0),
                        allDay: false
                    },
                    {
                        title: 'PLP P1',
                        start: new Date(2017, 4, 11, 8, 0),
                        allDay: false
                    },
                    {
                        title: 'Web P1',
                        start: new Date(2017, 4, 12, 8, 0),
                        allDay: false
                    },
                    {
                        title: 'Compiladores Entrega Fase 2',
                        start: new Date(2017, 4, 28, 13, 0),
                        allDay: false
                    },
                    {
                        title: 'Compiladores P1',
                        start: new Date(2017, 4, 29, 13, 0),
                        allDay: false
                    },
                    {
                        title: 'LabBD Entrega Intermediária',
                        start: new Date(2017, 5, 1),
                        allDay: false
                    },
                    {
                        title: 'PLP P2',
                        start: new Date(2017, 5, 6, 8, 0),
                        allDay: false
                    },
                    {
                        title: 'Redes P2',
                        start: new Date(2017, 5, 14, 10, 0),
                        allDay: false
                    },
                    {
                        title: 'Web Estudo de Caso 1',
                        start: new Date(2017, 5, 23, 8, 0),
                        allDay: false
                    },
                    {
                        title: 'Compiladores Entrega Fase 3',
                        start: new Date(2017, 5, 26, 13, 0),
                        allDay: false
                    },
                    {
                        title: 'ES2 P1',
                        start: new Date(2017, 5, 27, 14, 0),
                        allDay: false
                    },
                    {
                        title: 'ES2/Web/LabBD Apresentação Final',
                        start: new Date(2017, 5, 27),
                        allDay: false
                    },
                    {
                        title: 'Web Estudo de Caso 2',
                        start: new Date(2017, 5, 27),
                        allDay: false
                    },
                    {
                        title: 'Compiladores P2',
                        start: new Date(2017, 6, 3, 13, 0),
                        allDay: false
                    },
                    {
                        title: 'Web P2',
                        start: new Date(2017, 6, 7, 8, 0),
                        allDay: false
                    },
                    {
                        title: 'CG Prova',
                        start: new Date(2017, 6, 7, 14, 0),
                        allDay: false
                    },
                    {
                        title: 'PLP P3',
                        start: new Date(2017, 6, 13, 8, 0),
                        allDay: false
                    },
                    {
                        title: 'LabBD Prova',
                        start: new Date(2017, 6, 13),
                        allDay: false
                    },
                    {
                        title: 'Redes P3',
                        start: new Date(2017, 6, 17, 10),
                        allDay: false
                    }
                    ],
                    backgroundColor: '#E74C3C'
                },
                {
                	events: [
                	{
                        title: 'SeCot',
                        start: new Date(2017,4, 15, 8, 0),
                        end: new Date(2017, 4, 18, 18, 0),
                        url: 'http://secot.com.br/'
                    }],
                    backgroundColor: '#BDC3C7'
                },
                {
                	events: [
                   /* optativas */
                	{
                        title: 'AM Projeto Final',
                        start: new Date(2017, 5, 14, 14, 0),
                        allDay: false,
                    },
                	{
                        title: 'AM Seminário',
                        start: new Date(2017, 5, 20, 14, 0),
                        allDay: false,
                    },
                	{
                        title: 'AM Exame',
                        start: new Date(2017, 5, 14, 14, 0),
                        allDay: false,
                    },
                	{
                        title: 'Criptografia P1',
                        start: new Date(2017, 4, 11, 14, 0),
                        allDay: false,
                    },
                	{
                        title: 'Criptografia P2',
                        start: new Date(2017, 6, 6, 14, 0),
                        allDay: false,
                    }

                ],
                    backgroundColor: '#9B59B6'
                },

                
                ]
			});

  			//#26B99A
  			//#9B59B6
  			//#BDC3C7
  			//#E74C3C
			// Boas cores para serem usadas
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
			z-index: 2;
		}
		.background{
			background-image: url('logo.png');
			background-size: cover;
			position: absolute;
			display: block;
			height: 900px;
			width: 900px;
			left: 0;
			right: 0;
			z-index: 1;
			filter: blur(5px);
			-webkit-filter: blur(5px);
		}
	</style>
</head>
<body>

	<!--FullCalendar container div-->
	<!-- <div class='background'></div> -->
	<div id='calendar'></div>
	
</body>
</html>
