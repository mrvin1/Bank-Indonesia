@include('layouts.navigation')

<head>
    <title>List COE</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="fullcalendar.js"></script>
</head>
<body> 
    <div class="content"style="background-image: url('{{Storage::url('assetsweb/coe.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 130%">
        <div class="blur" style="background: rgba(235, 238, 192, 0.55); backdrop-filter: blur(5px);height: 100%;width: 100%;"> 
            <div class="b" style="display: inline-block;position: absolute;right: 0px;width: 300px;">
                <a class="btn btn-success" href="{{route('addCOE')}}" role="button">Tambah</a>
            </div>
            <div class="container" >
                <br />
                <h1 class="text-center text-primary">Calendar of Event - COE</h1>
                <br />
                <div id="calendar" style="background-color: white;"></div>
            </div>
        </div>
    </div>
<script>

$(document).ready(function () {

$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});

var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
        left:'prev,next today',
        center:'title',
        right:'month,agendaWeek,agendaDay'
    },
    events:'/coe',
    selectable:true,
    selectHelper: true,

    eventClick:function(event)
    {
        if(confirm("Apakah anda yakin ingin menghapus agenda ini?"))
        {
            var id = event.id;
            $.ajax({
                url:"/full-calender/action",
                type:"POST",
                data:{
                    id:id,
                    type:"delete"
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Agenda berhasil dihapus!");
                }
            })
        }
    }
});

});

</script>
  
</body>
@include('layouts.footer')