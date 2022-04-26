const days = document.getElementById('days');
const hours = document.getElementById('hours');
const minutes = document.getElementById('minutes');
const seconds = document.getElementById('seconds');
const count = document.getElementById('count');

    function updateCount(){
        const currentYear= moment("2023",'YYYY'+1)
        const now=moment();
        const difference= currentYear - now ;
        const nbJours=currentYear.diff(now,"day");
        const duration=moment.duration(difference,'milliseconds')

        days.textContent = -nbJours;
        hours.textContent =  -duration._data.hours;
        minutes.textContent = -duration._data.minutes;
        seconds.textContent = -duration._data.seconds;


 }

setInterval(()=>{
    updateCount();
     count.style.display = 'flex';
},1000);