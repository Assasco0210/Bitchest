import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom';
import LineChart from './LineChart';

if (document.getElementById('line-chart')) {
    ReactDOM.render(<LineChart />, document.getElementById('line-chart'));
}