var gaugeOptions = {

    chart: {
        type: 'solidgauge',
    },

    title: null,



    pane: {
        startAngle: 0,
        endAngle: 360,
        size: '100%',
        background: {
            backgroundColor: 'lightgray',
            innerRadius: '60%',
            outerRadius: '100%',
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#ADD8E6'], // red
            [0.5, '#0000FF'], // yellow #0000FF
            [0.9, '#00004c'] // green#ADD8E6
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: 35
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('js', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'JS'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Javascript',
        data: [45],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:15px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'white')
        },

    }]

}));

var chartSpeed = Highcharts.chart('html-css', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Html-css'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Html-css',
        data: [75],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:15px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'white')
        },

    }]

}));

var chartSpeed = Highcharts.chart('bootstrap', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Bootstrap  '
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Bootstrap  ',
        data: [60],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:15px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'white')
        },

    }]

}));

var chartSpeed = Highcharts.chart('PHP', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'PHP'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'PHP',
        data: [70],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:15px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'white')
        },

        }]

    }));
    var chartSpeed = Highcharts.chart('jquery', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'Jquery'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'jquery',
            data: [50],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:15px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'white')
            },

        }]

    }));

    var chartSpeed = Highcharts.chart('foundation', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'Foundation  '
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'foundation  ',
            data: [30],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:15px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'white')
            },

        }]

    }));

    var chartSpeed = Highcharts.chart('materialize', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'Materialize'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'materialize',
            data: [30],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:15px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'white')
            },

        }]

}));
var chartSpeed = Highcharts.chart('ajax', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Ajax'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'ajax',
        data: [45],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:15px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'white')
        },

    }]

}));
