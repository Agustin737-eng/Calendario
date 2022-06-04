//const { endsWith } = require("lodash");

var myModal = new bootstrap.Modal(document.getElementById('evento'));
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('agenda');
    let formulario = document.querySelector('form');
    var eventos = axios.get('http://127.0.0.1:8000/mostrar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        
        initialView: 'dayGridMonth', //inicia con vista de mes
        selectable: true,
        locale:"es", //mostrar calendario en español

        headerToolbar: {
            left:'prev,next today',
            center:'title',
            right:'dayGridMonth,timeGridWeek'
        },
        events: 'http://127.0.0.1:8000/mostrar',

        //para capturar los datos cuando seleccion un dia en el calendario
        //en info nos puede devolver que dia presiono
        
        dateClick:function(info){
            document.getElementById('titulo').textContent = 'Fecha: '+info.dateStr; 
            myModal.show();
        }


    });
    calendar.render();

    document.getElementById('btnGuardar').addEventListener('click',function()
    {
        const datos = new FormData(formulario);
        console.log(datos);
        console.log(formulario.title.value);

        axios.post('http://127.0.0.1:8000/agregar', datos).
        then(
            (repuesta)=>{
                myModal.hide();
                console.log('respuesta: '+respuesta.value);
            }).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            );
    });
});
