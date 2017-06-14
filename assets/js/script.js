$(function () {
        
    $('#calendar').fullCalendar({
        defaultView: 'agendaWeek',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'//month,agendaWeek,agendaDay,listWeek
        },
        navLinks: true, //transformar os dias e semandas como links, para exibir a agenda do dia ou semana selecionada
        selectable: true, 
        editable: true, //permitir edição
        eventLimit: true, 
        allDaySlot: false, //oculta o slot superior de evento do dia inteiro
        height: 450, //delimita o tamanho do calendário
        hiddenDays: [0,1], //oculta os dias da semana
        events: BASE_URL+"/ajax/getEvents", //Carrega todos os eventos do banco de dados
        //Ao clicar em um evento
        eventClick: function(calEvent) {
            if (confirm("Remover o evento?")){
                var id = calEvent.id;
                $.ajax({
                    url: BASE_URL+'/ajax/removeEvent',
                    type:'POST',
                    data:'id='+id,
                    dataType:'json',
                    success: function(json) {
                        //location.reload();
                        //$('#calendar').fullCalendar('refetchEvents');
                        $('#calendar').fullCalendar('removeEvents', calEvent.id);
                    },
                    error: function() {
                        alert("Ocorreu algum erro ao excluir o evento");
                    }
                }); 
            }
        },
        //Ao selecionar um período no calendário
        select: function(start, end) {
            var title = prompt('Nome do Evento:');
            var eventData;
            if (title) {

                var start = $.fullCalendar.formatDate(start, "YYYY-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "YYYY-MM-DD HH:mm:ss");

                $.ajax({
                    url: BASE_URL+'/ajax/insertEvent',
                    type:'POST',
                    data:'title='+title+'&start='+start+'&end='+end,
                    dataType:'json',
                    success: function(json) {
                        //location.reload();
                        $('#calendar').fullCalendar('renderEvent', json, false);
                    },
                    error: function() {
                        alert("Ocorreu algum erro ao incluir o evento");
                    }
                });                
                
            }
            $('#calendar').fullCalendar('unselect');
        },
        //Ao editar o evento arrastando e soltando
        eventDrop: function(calEvent) {
            var id = calEvent.id;
            var start = $.fullCalendar.formatDate(calEvent.start, "YYYY-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(calEvent.end, "YYYY-MM-DD HH:mm:ss");
            $.ajax({
                url: BASE_URL+'/ajax/updateEvent',
                type:'POST',
                data:'id='+id+'&start='+start+'&end='+end,
                dataType:'json',
                success: function(json) {
                    location.reload();
                    //$('#calendar').fullCalendar('refetchEvents');
                    //$('#calendar').fullCalendar('renderEvent', calEvent, false);
                },
                error: function() {
                    alert("Ocorreu algum erro ao mover o evento");
                }
            });
            

        },
        //Ao redimencionar o evento
        eventResize: function(calEvent) {
            var id = calEvent.id;
            var start = $.fullCalendar.formatDate(calEvent.start, "YYYY-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(calEvent.end, "YYYY-MM-DD HH:mm:ss");
            console.log(calEvent);
            $.ajax({
                url: BASE_URL+'/ajax/updateEvent',
                type:'POST',
                data:'id='+id+'&start='+start+'&end='+end,
                dataType:'json',
                success: function(json) {
                    location.reload();
                    //$('#calendar').fullCalendar('refetchEvents');
                    //$('#calendar').fullCalendar('renderEvent', calEvent, false);
                },
                error: function() {
                    alert("Ocorreu algum erro ao mover o evento");
                }
            });
        }
    });
    
});