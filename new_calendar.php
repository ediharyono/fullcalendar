
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">	

 
<div class="container">
    <h1>Jadwal Kuliah</h1>
	
<?php
			foreach ($coba as $cobaan) { ?>
					{ 
						daysOfWeek: [ <?php echo "'".$cobaan->kdhari."'";?> ], // these recurrent events move separately
						title : <?php echo "'".$cobaan->kdkmkmsmks."'";?>,
						
						startTime: <?php echo "'".      $cobaan->jmrenmsmks         ."'";?>,
						
						//endTime: '11:30',			  
						color: 'red'
					}, 
<?php			}
?>		
    <div class="row" style="width:100%">
       <div class="col-md-12">
           <div id="calendar"></div>
       </div>
    </div>
</div>

<link href='<?=base_url('assets/')?>/fullcalendar/lib/main.css' rel='stylesheet' />
<script src='<?=base_url('assets/')?>/fullcalendar/lib/main.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
	  
    //var events;	  
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },

//

		initialDate: new Date(),
 //     initialDate: '2020-09-12',
	  
			  navLinks: true, // can click day/week names to navigate views
			  businessHours: true, // display business hours
			  editable: true,
			  selectable: true,

		events: 
		[

<?php
			foreach ($coba as $cobaan) { ?>
					{ 
						daysOfWeek: [ <?php echo "'".$cobaan->kdhari."'";?> ], // these recurrent events move separately
						title : <?php echo "'".$cobaan->kdkmkmsmks."'";?>,
						
						startTime: <?php echo "'".str_replace($cobaan->jmrenmsmks, ".", ":")."'";?>,
						
						//endTime: '11:30',			  
						color: 'red'
					}, 
<?php			}
?>				
		]

/*         {
          title: 'Business Lunch',
          start: '2020-09-03T13:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Meeting',
          start: '2020-09-13T11:00:00',
          constraint: 'availableForMeeting', // defined below
          color: '#257e4a'
        },
        {
          title: 'Conference',
          start: '2020-09-18',
          end: '2020-09-20'
        },
        {
          title: 'Party',
          start: '2020-09-29T20:00:00'
        },

        // areas where "Meeting" must be dropped
        {
          groupId: 'availableForMeeting',
          start: '2020-09-11T10:00:00',
          end: '2020-09-11T16:00:00',
          display: 'background'
        },
        {
          groupId: 'availableForMeeting',
          start: '2020-09-13T10:00:00',
          end: '2020-09-13T16:00:00',
          display: 'background'
        },

        // red areas where no events can be dropped
        {
          start: '2020-09-24',
          end: '2020-09-28',
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        },
        {
          start: '2021-03-01',
   
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        },
		
		
			{
			  groupId: 'blueEvents', // recurrent events in this group move together
			  daysOfWeek: [ '1' ],
			  startTime: '10:45',
			  //endTime: '12:45'
			},
			{
			  daysOfWeek: [ '5' ], // these recurrent events move separately
			  title : 'Kuliah',
			  startTime: '11:00',
			  //endTime: '11:30',			  
			  color: 'red'
			} */
	
		
		

      //]
    });

    calendar.render();
  });

</script>

  


 
