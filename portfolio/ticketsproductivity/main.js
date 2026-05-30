
let resolved = parseInt(sessionStorage.getItem('resolved')) || 0;
let escalated = parseInt(sessionStorage.getItem('escalated')) || 0;

updateDisplay();

document.getElementById('btnResolved').addEventListener('click', () => {
    resolved++;
    sessionStorage.setItem('resolved', resolved);
    updateDisplay();
});

document.getElementById('btnEscalated').addEventListener('click', () => {
    escalated++;
    sessionStorage.setItem('escalated', escalated);
    updateDisplay();
});

function updateDisplay() {
    document.getElementById('resolved').textContent = resolved;
    document.getElementById('escalated').textContent = escalated;
    document.getElementById('total').textContent = resolved + escalated;
}

document.getElementById('date').textContent =
    new Date().toLocaleDateString('es-ES');

//CHART DAY
var ctx2 = document.getElementById('myChartDay').getContext('2d');

var myChart2 = new Chart(ctx2, {
    type: 'bar', //line 
    data: {
        labels: ['10', '11', '12', '13', '14', '15', '16', '17'],
        datasets: [{ 
            label: '# Tickets per hour Today',
            data: [3, 165, 115, 134, 114],
            backgroundColor: 
                'rgba(153, 102, 255, 0.6)'
            
            
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    options: {
        responsive: false //needed to make it small
    }
    
});


//CHART WEEK
var ctx = document.getElementById('myChartThisWeek').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar', //line 
    data: {
        labels: ['MON', 'TUE', 'WED', 'THU', 'FRI'],
        datasets: [{
            label: '# of Tickets Per Week',
            data: [120, 165, 115, 134, 114],
            backgroundColor: 'rgba(255, 206, 86, 0.6)'
           
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    options: {
        responsive: false //needed to make it small
    }
    
});


//CHART MONTH
var ctx = document.getElementById('myChartThisMonth').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar', //line 
    data: {
        labels: ['MON', 'TUE', 'WED', 'THU', 'FRI'],
        datasets: [{
            label: '# of Tickets Per Week',
            data: [120, 165, 115, 134, 114],
            backgroundColor: 'rgba(255, 206, 86, 0.6)'
           
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    options: {
        responsive: false //needed to make it small
    }
    
});

