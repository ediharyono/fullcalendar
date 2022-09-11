
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">	

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="<?=base_url('assets/')?>/fullcalendar/fullcalendar.min.css"> 
    <script src="<?=base_url('assets/')?>/fullcalendar/moment.min.js"></script>
    <script src="<?=base_url('assets/')?>/fullcalendar/fullcalendar.min.js"></script>

<link href="<?=base_url('assets/plugins/premium')?>/style.bundle.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets')?>/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" /> 
 <script src="<?=base_url('assets/table')?>/fullcalendar.bundle.js"></script>	
 
  
<div class="container">
    <h1><?php  ?></h1>
    <div class="row" style="width:100%">
       <div class="col-md-12">
           <div id="calendar"></div>
       </div>
    </div>
</div>
   
<?php echo json_encode($data);?>  
<script type="text/javascript">
   
    var events = <?=json_encode($data)?>;
    
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
           
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'Hari Ini',
        month: 'bulanan',
        week : 'pekanan',
        day  : 'harian'
      },

	//events: events,
  
  events: [

    {
      daysOfWeek: [ '3' ], // these recurrent events move separately
      startTime: '11:00:00',
      endTime: '11:30:00',
      color: 'red'
    }
  ],
  
	
			editable: false,
			eventLimit: true,
			droppable: false

    })
</script>   
</body>
</html>