$(document).ready(function() {
    jQuery.get("../../../system/data/score/analisis.txt", function(txtData) {
        var username = document.getElementById("user-username").value;
        var chartCanvas = document.getElementById("radar-chart");
        var tempLine = txtData.split("\n");
        var analysisData;

        for(var a=0; a<tempLine.length ; a++) {
            var tempData = tempLine[a].split(",");

            if(tempData[0] == username) {
                analysisData = new Array();

                for(var x=1 ; x<tempData.length ; x++)
                    analysisData.push(tempData[x]);
            }
        }

        var data = {
            labels: [
                "Inisiatif 1",
                "Inisiatif 2",
                "Inisiatif 3",
                "inisiatif 4",
                "Inisiatif 5",
                "Inisiatif 6",
                "Inisiatif 7",
                "Inisiatif 8",
                "inisiatif 9",
                "Inisiatif 10"
            ],
            datasets: [
                {
                    label: "Markah",
                    backgroundColor: "rgba(179,181,198,0.2)",
                    borderColor: "rgba(179,181,198,1)",
                    pointBackgroundColor: "rgba(179,181,198,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    data: analysisData
                }
            ]
        };

        var radarChart = new Chart(chartCanvas, {
            type: 'radar',
            data: data,
            option: {
                scale: {
                    reverse: true,
                    ticks: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
});
