//window.onload = function () {
$(document).ready(function () {
    // chartjs
    new Chart(document.getElementById("pie-chart"), {
        type: 'pie',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: [2478, 5267, 734, 784, 433]
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            },
            plugins: {
                labels: {
                    // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
                    render: 'percentage',

                    // precision for percentage, default is 0
                    precision: 0,

                    // identifies whether or not labels of value 0 are displayed, default is false
                    showZero: true,

                    // font size, default is defaultFontSize
                    fontSize: 12,

                    // font color, can be color array for each data or function for dynamic color, default is defaultFontColor
                    fontColor: '#fff',

                    // font style, default is defaultFontStyle
                    fontStyle: 'normal',

                    // font family, default is defaultFontFamily
                    fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

                    // draw text shadows under labels, default is false
                    textShadow: true,

                    // text shadow intensity, default is 6
                    shadowBlur: 10,

                    // text shadow X offset, default is 3
                    shadowOffsetX: -5,

                    // text shadow Y offset, default is 3
                    shadowOffsetY: 5,

                    // text shadow color, default is 'rgba(0,0,0,0.3)'
                    shadowColor: 'rgba(255,0,0,0.75)',

                    // draw label in arc, default is false
                    // bar chart ignores this
                    arc: true,

                    // position to draw label, available value is 'default', 'border' and 'outside'
                    // bar chart ignores this
                    // default is 'default'
                    position: 'default',

                    // draw label even it's overlap, default is true
                    // bar chart ignores this
                    overlap: true,

                    // show the real calculated percentages from the values and don't apply the additional logic to fit the percentages to 100 in total, default is false
                    showActualPercentages: true,

                    // set images when `render` is 'image'
                    images: [
                      {
                          src: 'image.png',
                          width: 16,
                          height: 16
                      }
                    ],


                }
            }
        }
    });





    //Bar chartjs


    new Chart(document.getElementById("bar-charts"), {
        type: 'bar',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [
              {
                  label: "Population (millions)",
                  backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                  data: [2478, 5267, 734, 784, 433]
              }
            ],

        },
        options: {
            responsive: true,
            scales: {
                xAxes: [{
                    display: true
                }],
                yAxes: [{
                    display: false
                }],
            },
            legend: { display: true },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
          ,
            plugins: {
                labels: {
                    // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
                    render: 'percentage'
                }
            }
        }
    });


});