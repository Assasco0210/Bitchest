import { Line } from 'react-chartjs-2';

function LineChart() {
  const data = {
    labels: ['1 jour', '2 jours', '3 jours', '4 jours', '5 jours'],
    datasets: [
      {
        label: 'Cours de la crypto-monnaie',
        data: [12, 19, 3, 5, 2, 3],
        fill: false,
        backgroundColor: 'rgb(75, 192, 192)',
        borderColor: 'rgba(75, 192, 192, 0.2)',
      },
    ],
  };

  return <Line data={data} />;
}

export default LineChart;