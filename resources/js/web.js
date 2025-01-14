
// Datos de ejemplo para los gráficos
const labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
const data1 = {
  labels: labels,
  datasets: [{
    label: 'Dataset 1',
    data: [21,30],
    backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgba(255, 99, 132, 1)',
  }, {
    label: 'Dataset 2',
    data: [32,18],
    backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgba(54, 162, 235, 1)',
  }]
};

// Crear los gráficos
const ctx1 = document.getElementById('myChart1').getContext('2d');
new Chart(ctx1, {
  type: 'bar',
  data: data1
});

// ... (similar para el gráfico de línea)
