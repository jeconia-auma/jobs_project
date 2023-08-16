const graph = document.getElementById('jobsAvailable');
const graph1 = document.getElementById('employeesEmployers');
const graph2 = document.getElementById('jobGeneration');
const chrt = new Chart(graph, {
    type: 'pie',
    data: {
        labels: ['Applied', 'Available'],
        datasets: [{
            label: 'jobs',
            data: [1, 2],
            backgroundColor: ['red', 'blue']
        }]
    },
    options: {
        title: {
            display: 'true',
            text: 'FoodStaff'
        }, 
    }
});

const chrt1 = new Chart(graph1, {
    type: 'pie',
    data: {
        labels: ['Eployees', 'Employers'],
        datasets: [{
            label: 'jobs',
            data: [4, 1],
            backgroundColor: ['lavender', 'yellow']
        }]
    },
    options: {
        title: {
            display: 'true',
            text: 'FoodStaff'
        }, 
    }
});

const chrt2 = new Chart(graph2, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: ' ',
            data: [4, 1, 3, 30, 22, 15, 60],
            backgroundColor: ['lavender', 'yellow', 'steelblue', 'lime', 'cyan', 'magenta', 'purple']
        }]
    },
    options: {
        title: {
            display: 'true',
            text: 'FoodStaff'
        }, 
    }
});