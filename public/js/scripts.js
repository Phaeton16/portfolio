//internal respondents age

var xValues = [
	"21 and under",
	"22 to 34",
	"35 to 44",
	"45 to 54",
	"55 to 64",
	"65 yrs. old and above",
	"No Response",
];
var onsite = [0, 20, 7, 1, 3, 0, 0];
var online = [0, 0, 0, 0, 0, 0, 0];


new Chart("internal-respondents-age", {
	type: "bar",
	data: {
		labels: xValues,
		datasets: [
			{
				label: "On-site",
				backgroundColor: "lightblue",
				data: onsite,
			},
			{
				label: "Online",
				backgroundColor: "orange",
				data: online,
			},
		],
	},
	options: {
		scales: {
			xAxes: [{
				barPercentage: .5, // Adjust as needed
				categoryPercentage: 0.7, // Adjust as needed
				ticks: {
					fontSize: 8,
				}
			}],
			yAxes: [
				{
					ticks: {
						beginAtZero: true,
						stepSize: 5,
						max: 25,
						fontSize: 8,

					},
					scaleOverride: true,
					scaleSteps: 5,
					scaleStepWidth: 5,
					scaleStartValue: 0,
				},
			],
		},
		animation: {
            onComplete: function () {
                var chartInstance = this.chart;
                var ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
				ctx.font = 'bold 8px Arial';

                this.data.datasets.forEach(function (dataset) {
                    for (var i = 0; i < dataset.data.length; i++) {
                        var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                        var value = dataset.data[i];

                        if (value > 0) { // Check if the value is greater than 0
                            ctx.fillStyle = 'black';
                            ctx.fillText(value, model.x, model.y - 5); // Adjust the y-coordinate as needed
                        }
                    }
                });
            }
        },
		legend: {
			display: true,
			position: "bottom",
			labels: {
				fontColor: "black",
				fontSize: 8,
				boxWidth: 8,
			},
		},
		title: {
			display: true,
			text: "Internal Respondents: Age Bracket",
			fontSize: 10,
		},
	},
});

//external respondents age

var xValues = [
	"21 and under",
	"22 to 34",
	"35 to 44",
	"45 to 54",
	"55 to 64",
	"65 yrs. old and above",
	"No Response",
];
var onsite = [1, 0, 2, 0, 0, 0, 0];
var online = [0, 0, 0, 0, 0, 0, 0];

new Chart("external-respondents-age", {
	type: "bar",
	data: {
		labels: xValues,
		datasets: [
			{
				label: "On-site",
				backgroundColor: "lightblue",
				data: onsite,
			},
			{
				label: "Online",
				backgroundColor: "orange",
				data: online,
			},
		],
	},
	options: {
		scales: {
			xAxes: [{
				barPercentage: .5, // Adjust as needed
				// categoryPercentage: 0.7 // Adjust as needed
				ticks:{
					fontSize: 8,
				}
			}],
			yAxes: [
				{
					ticks: {
						beginAtZero: true,
						stepSize: .5,
						max: 2.5,
						fontSize: 8,
					},
					scaleOverride: true,
					scaleSteps: 5,
					scaleStepWidth: 5,
					scaleStartValue: 0,
				},
			],
		},
		animation: {
            onComplete: function () {
                var chartInstance = this.chart;
                var ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
				ctx.font = 'bold 8px Arial';

                this.data.datasets.forEach(function (dataset) {
                    for (var i = 0; i < dataset.data.length; i++) {
                        var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                        var value = dataset.data[i];

                        if (value > 0) { // Check if the value is greater than 0
                            ctx.fillStyle = 'black';
                            ctx.fillText(value, model.x, model.y - 5); // Adjust the y-coordinate as needed
                        }
                    }
                });
            }
        },
		legend: {
			display: true,
			position: "bottom",
			labels: {
				fontColor: "black",
				fontSize: 8,
				boxWidth: 8,
			},
		},
		title: {
			display: true,
			text: "External Respondents: Age Bracket",
			fontSize: 10,
		},
	},
});

//internal respondents sex

var xValues = [
	"Female",
	"Male",
	"No Response",
];
var onsite = [10,11,1];
var online = [0, 0, 0];



new Chart("internal-respondents-sex", {
	type: "bar",
	data: {
		labels: xValues,
		datasets: [
			{
				label: "On-site",
				backgroundColor: "lightblue",
				data: online,
			},
			{
				label: "Online",
				backgroundColor: "orange",
				data: onsite,
			},
		],
	},
	options: {
		scales: {
			xAxes: [{
				barPercentage: .7, // Adjust as needed
				// categoryPercentage: 0.7 // Adjust as needed
				ticks: {
					fontSize: 8,
				}
			}],
			yAxes: [
				{
					ticks: {
						beginAtZero: true,
						stepSize: 2,
						max: 20,
						fontSize: 8,
					},
					scaleOverride: true,
					scaleSteps: 5,
					scaleStepWidth: 5,
					scaleStartValue: 0,
				},
			],
		},
		animation: {
            onComplete: function () {
                var chartInstance = this.chart;
                var ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
				ctx.font = 'bold 8px Arial';

                this.data.datasets.forEach(function (dataset) {
                    for (var i = 0; i < dataset.data.length; i++) {
                        var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                        var value = dataset.data[i];

                        if (value > 0) { // Check if the value is greater than 0
                            ctx.fillStyle = 'black';
                            ctx.fillText(value, model.x, model.y - 5); // Adjust the y-coordinate as needed
                        }
                    }
                });
            }
        },
		legend: {
			display: true,
			position: "bottom",
			labels: {
				fontColor: "black",
				fontSize: 8,
				boxWidth: 8,
			},
		},
		title: {
			display: true,
			text: "Internal Respondents: Sex",
			fontSize: 10,
		},
	},
});

//external respondents sex

var xValues = [
	"Female",
	"Male",
	"No Response",
];
var onsite = [1,2,0];
var online = [0, 0, 0];


new Chart("external-respondents-sex", {
	type: "bar",
	data: {
		labels: xValues,
		datasets: [
			{
				label: "On-site",
				backgroundColor: "lightblue",
				data: online,
			},
			{
				label: "Online",
				backgroundColor: "orange",
				data: onsite,
			},
		],
	},
	options: {
		scales: {
			xAxes: [{
				barPercentage: .7, // Adjust as needed
				// categoryPercentage: 0.7 // Adjust as needed
				ticks: {
					fontSize: 8,
				}
			}],
			yAxes: [
				{
					ticks: {
						beginAtZero: true,
						stepSize: .5,
						max: 2.5,
						fontSize: 8,
					},
					scaleOverride: true,
					scaleSteps: 5,
					scaleStepWidth: 5,
					scaleStartValue: 0,
				},
			],
		},
		animation: {
            onComplete: function () {
                var chartInstance = this.chart;
                var ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
				ctx.font = 'bold 8px Arial';

                this.data.datasets.forEach(function (dataset) {
                    for (var i = 0; i < dataset.data.length; i++) {
                        var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                        var value = dataset.data[i];

                        if (value > 0) { // Check if the value is greater than 0
                            ctx.fillStyle = 'black';
                            ctx.fillText(value, model.x, model.y - 5); // Adjust the y-coordinate as needed
                        }
                    }
                });
            }
        },
		legend: {
			display: true,
			position: "bottom",
			labels: {
				fontColor: "black",
				fontSize: 8,
				boxWidth: 8,
			},
		},
		title: {
			display: true,
			text: "External Respondents: Sex",
			fontSize: 10,
		},
	},
});

//sex distribution pie

var xValues = ["Internal On-site", "Internal Online", "External On-site", "External Online"];
var yValues = [91, 0, 9, 0];
var barColors = [
  "lightblue",
  "red",
  "gray",
  "orange",
];


new Chart("sex-distribution", {
	type: "pie",
	data: {
		labels: xValues,
		datasets: [{
			backgroundColor: barColors,
			data: yValues
		}]
	},
	options: {
		title: {
			display: true,
			text: "Sex Distribution: All Respondents"
		},
		animation: {
			onComplete: function () {
				var ctx = this.chart.ctx;
				this.data.datasets.forEach(function (dataset) {
					for (var i = 0; i < dataset.data.length; i++) {
						var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
						var total = dataset._meta[Object.keys(dataset._meta)[0]].total;
						var mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius) / 2;
						var start_angle = model.startAngle;
						var end_angle = model.endAngle;
						var mid_angle = start_angle + (end_angle - start_angle) / 2;

						var x = mid_radius * Math.cos(mid_angle);
						var y = mid_radius * Math.sin(mid_angle);

						if (dataset.data[i] > 0) { // Check if the value is greater than 0
							ctx.fillStyle = 'black';
							ctx.font = 'bold 10px Arial';
							ctx.fillText(dataset.data[i] + '%', model.x + x, model.y + y);
						}
					}
				});
			}
		},
		legend: {
			display: true,
			position: "bottom",
			align: "start",
			labels: {
				fontColor: "black",
				fontSize: 8,
				boxWidth: 8,
				padding: 20,
			},
		},
	},
});


// for loop

// var feedbackData = '<?php echo json_encode($feedbackData); ?>;'
// console.log(feedbackData);

// var chartsID = [
//     { id: "a-internal-responses", title: "Internal Responses", responses:[150, 4, 0, 0, 0,], color: "orange", max: 160, skips: 20  },
//     { id: "a-external-responses", title: "External Responses", responses:[15, 0, 0, 0, 0,], color: "orange", max: 16, skips: 2  },

// 	{ id: "b-internal-responses", title: "Internal Responses", responses:[145, 5, 0, 0, 0,], color: "lightblue", max: 160, skips: 20  },
// 	{ id: "b-external-responses", title: "External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

// 	{ id: "c-internal-responses", title: "Internal Responses", responses:[145, 8, 0, 0, 0,], color: "lightblue", max: 160, skips: 20  },
// 	{ id: "c-external-responses", title: "External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

// 	{ id: "d-internal-responses", title: "Internal Responses", responses:[135, 16, 0, 0, 0,], color: "lightblue", max: 160, skips: 20  },
// 	{ id: "d-external-responses", title: "External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

// 	{ id: "e-internal-responses", title: "Internal Responses", responses:[125, 8, 9, 0, 0,], color: "lightblue", max: 160, skips: 20  },
// 	{ id: "e-external-responses", title: "External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

// 	{ id: "f-internal-responses", title: "Internal Responses", responses:[145, 4, 0, 0, 0,], color: "lightblue", max: 160, skips: 20  },
// 	{ id: "f-external-responses", title: "External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

// 	{ id: "g-internal-responses", title: "Internal Responses", responses:[145, 8, 0, 0, 0,], color: "lightblue", max: 160, skips: 20  },
// 	{ id: "g-external-responses", title: "External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

// 	{ id: "h-internal-responses", title: "Internal Responses", responses:[145, 8, 0, 0, 0,], color: "lightblue", max: 160, skips: 20  },
// 	{ id: "h-external-responses", title: "External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

// 	{ id: "i-internal-responses", title: "Internal Responses", responses:[150, 4, 0, 0, 0,], color: "lightblue", max: 160, skips: 20  },
// 	{ id: "i-external-responses", title: "External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

// ];
// var xValues = [
// 	"Very Satisfied",
// 	"Satisfied",
// 	"Neutral",
// 	"Dissatisfied",
// 	"Very Dissatisfied",
// ];


// for (var i = 0; i < chartsID.length; i++) {
//     new Chart(chartsID[i].id, {
//         type: "horizontalBar",
// 		data: {
// 		labels: xValues,
// 		datasets: [
// 			{
// 				backgroundColor: chartsID[i].color,
// 				data: chartsID[i].responses,
// 			},
// 		],
// 		},
// 		options: {
// 			scales: {
// 				xAxes: [{
// 					position: "top",
// 					barPercentage: .5,
// 					ticks: {
// 						fontSize: 8,
// 						beginAtZero: true,
// 						stepSize: chartsID[i].skips,
// 						max: chartsID[i].max,
// 						fontSize: 8,
// 					},
// 				}],
// 			},
// 			title:{
// 				display: true,
// 				text:chartsID[i].title,
// 			},
// 			legend: {
// 					display: false
// 				}
// 		},
// 	});
// }

//table data




// for (var counter = 1; counter <= 9; counter++){
// 	var ratingName = ["Very Satisfied", "Satisfied", "Neutral", "Dissatisfied", "Very dissatisfied"];
// 	var ratingNumber = [5, 4, 3, 2, 1];


// 	var feedbackData = [
// 		[30, 150, 3, 15, 165],
// 		[1, 4, 0, 0, 4],
// 		[0, 0, 0, 0, 0],
// 		[0, 0, 0, 0, 0],
// 		[0, 0, 0, 0, 0]
// 	];
// 	var questionName = "question_" + counter;

// 	console.log(questionName);
// 	var tableBody = document.getElementById(questionName).getElementsByTagName('tbody')[0];

// 	for (var i = 0; i < ratingName.length; i++) {
// 		var row = tableBody.insertRow();

// 		var numberCell = row.insertCell();
// 		numberCell.textContent = ratingNumber[i];

// 		var emptyCell = row.insertCell();
// 		emptyCell.textContent = '';

// 		var nameCell = row.insertCell();
// 		nameCell.style.textAlign = "left";
// 		nameCell.textContent = ratingName[i];

// 		for (var j = 0; j < feedbackData[i].length; j++) {
// 			var dataCell = row.insertCell();
// 			dataCell.textContent = feedbackData[i][j];

// 			if (j === feedbackData[i].length - 1) {
// 				dataCell.style.fontWeight = "bold";
// 			}
// 		}
// 	}

// 	//total

// 	var totalValues = [31, 154, 3, 15, 169];
// 	var totalRow = tableBody.insertRow();

// 	totalRow.insertCell();
// 	totalRow.insertCell();

// 	var totalCell = totalRow.insertCell();


// 	// totalCell.colSpan = 2;
// 	totalCell.textContent = "Total";

// 	// Insert data values in the same row
// 	for (var j = 0; j < totalValues.length; j++) {
// 		var dataCell = totalRow.insertCell();
// 		dataCell.textContent = totalValues[j];

// 		if (j === totalValues.length - 1) {
// 			dataCell.style.fontWeight = "bold";
// 		}
// 	}

// 	//no response

// 	var noResponseValues = [31, "", 154, "", 3];

// 	var noResponseRow = tableBody.insertRow();
// 	var percentRow = tableBody.insertRow();

// 	noResponseRow.insertCell();
// 	noResponseRow.insertCell();


// 	var noResponseCell = noResponseRow.insertCell();

// 	var percentCell = percentRow.insertCell();

// 	percentCell.style.border = "1px solid black";
// 	percentCell.style.borderBottom = "none";
// 	percentCell.style.textAlign = "center"
// 	percentCell.textContent = "97%";


// 	noResponseCell.style.textAlign = "left";
// 	noResponseCell.textContent = "No Response"; // Concatenate the values

// 	// Insert data values in the same row
// 	for (var j = 0; j < noResponseValues.length; j++) {
// 		var dataCell = noResponseRow.insertCell();
// 		dataCell.textContent = noResponseValues[j];

// 		if (j === noResponseValues.length - 1) {
// 			dataCell.style.fontWeight = "bold";
// 		}
// 	}

// 	//average rating

// 	var averageValues = ["", 31, "", 154, 3];
// 	var averageRow = tableBody.insertRow();

// 	averageRow.insertCell();


// 	var averageCell = averageRow.insertCell();
// 	averageCell.style.borderLeft = "1px solid black";

// 	var averageCell = averageRow.insertCell();
// 	averageRow.style.borderLeft = "1px solid black";

// 	averageCell.style.textAlign = "left";
// 	averageCell.textContent = "Average Rating";

// 	// Insert data values in the same row
// 	for (var j = 0; j < averageValues.length; j++) {
// 		var dataCell = averageRow.insertCell();

// 		dataCell.textContent = averageValues[j];


// 		if (j === averageValues.length - 1) {
// 			dataCell.style.fontWeight = "bold";
// 		}
// 	}

// 	//last row


// 	var lastRow = tableBody.insertRow();
// 	var lastCell = lastRow.insertCell();

// 	lastCell.rowSpan = 2;
// 	lastCell.style.textAlign = "center";
// 	lastCell.style.display = "block";
// 	lastCell.style.border = "1px solid black";
// 	lastCell.style.borderTop = "none";
// 	lastCell.innerHTML = "To attain VS<br>rating from 80%<br>of survey<br>respondents";

// 	console.log(questionName);
// }





