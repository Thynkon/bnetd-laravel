import { formatBytes } from './formatBytes.js'

const ctx = document.getElementById('myChart').getContext('2d')
let nt = JSON.parse(document.getElementById('myChart').dataset.nt)

const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        datasets: [
            {
                label: 'Network Traffic',
                data: nt,
                backgroundColor: [
                    'rgba(158, 165, 215, 0.9)',
                    'rgba(65, 65, 80, 0.9)'
                ],
            }
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        plugins: {
            tooltip: {
                callbacks: {
                    label: function (context) {
                        return formatBytes(context.parsed.y)
                    }
                }
            }
        }
    }
})

window.addEventListener('contentChanged', event => {
    nt = JSON.parse(document.getElementById('myChart').dataset.nt)
    myChart.data.datasets[0].data = nt

    var colors = []

    Object.keys(nt).forEach(function (key, index) {
        console.log(this[key])
    }, nt)
})
