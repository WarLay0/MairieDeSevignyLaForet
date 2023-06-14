$(document).ready(function() {
  moment.locale('fr');
  $('#calendar').fullCalendar({
    locale: 'fr',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,listWeek'
    },
});

  $('[data-event-id]').each(function() {
    var eventId = $(this).data('event-id');
    var eventTitle = $(this).data('event-title');
    var eventStart = $(this).data('event-start');
    var eventEnd = $(this).data('event-end');
    var eventUrl = $(this).data('event-url');


    $('#calendar').fullCalendar('renderEvent', {
      id: eventId,
      title: eventTitle,
      start: eventStart,
      end: eventEnd,
      url: eventUrl,
    }, true);
  });
});