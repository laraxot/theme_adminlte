//https://www.coder.work/article/7556779


import 'fullcalendar';
import moment from 'moment';
import 'jquery-ui-dist/jquery-ui';
$(document).ready(function () {

    function ini_events(ele) {
        ele.each(function () {
            let eventObject = {
                title: $.trim($(this).text()),
                color: $(this).css("background-color"),
            };

            $(this).data('event', eventObject);
            $(this).draggable({
                zIndex: 1070,
                revert: true,
                revertDuration: 0
            });
        });
    }
    ini_events($('#external-events div.external-event'));

    $('#calendar').fullCalendar({
        locale: 'it',
        lang: 'it',
        columnFormat: 'ddd D/M',
        slotLabelFormat:"HH:mm",
        events: {
            url: '/calendarioGet',
            data: function () {
                return {
                    personId: $("select.collaboratore").children("option:selected").val(),
                };

            },textColor: 'black'
        },

        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },

        slotDuration: '00:15:00',

        defaultTimedEventDuration: '01:00:00',
        forceEventDuration: true,
        timeFormat: 'H:mm',

        eventClick: function (event, jsEvent, view) {

            if (!event.hasOwnProperty('descrizione')) {
                window.open(event.url);
            }
            return false;
        },
    });
});
