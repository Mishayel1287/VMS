document.addEventListener('DOMContentLoaded', function () {

    // Fetch the data from PHP script
    fetch('data.php')
        .then(response => response.json())
        .then(data => {
            const kpis = data.map(entry => entry.kpi_name);
            const values = data.map(entry => entry.value);

            // Create the chart
            const ctx = document.getElementById('chartCanvas').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: kpis,
                    datasets: [{
                        label: 'KPI Values',
                        data: values,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});

