// JavaScript code for chart (using Chart.js library)
const chartData = {
  labels: ['January', 'February', 'March', 'April', 'May', 'June'],
  datasets: [
    {
      label: 'Sales',
      data: [50, 60, 70, 80, 90, 100],
      backgroundColor: 'rgba(54, 162, 235, 0.6)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1,
    },
  ],
};

const chartOptions = {
  scales: {
    y: {
      beginAtZero: true,
    },
  },
};

const ctx = document.getElementById ('chartContainer').getContext ('2d');
const myChart = new Chart (ctx, {
  type: 'bar',
  data: chartData,
  options: chartOptions,
});

// JavaScript code for theme selection
const themeForm = document.querySelector ('form');
const themeSelect = document.getElementById ('theme');

themeForm.addEventListener ('submit', e => {
  e.preventDefault ();
  const selectedTheme = themeSelect.value;
  document.body.className = selectedTheme;
});
