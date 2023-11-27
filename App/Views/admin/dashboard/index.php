<div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
        <div class="row row-bordered g-0">
            <div class="col-md-8">
                <h5 class="card-header m-0 me-2 pb-3">Tổng thu nhập</h5>
                <div id="totalRevenueChart" class="px-2" style="min-height: 315px;"></div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <div class="text-center">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId" id="yearDropdown">

                            </div>
                        </div>
                    </div>
                </div>
                <div id="growthChart" style="min-height: 154.875px;"></div>
            </div>
        </div>
    </div>
</div>
<script>
    var o = config.colors.cardColor,
        t = config.colors.headingColor,
        e = config.colors.axisColor,
        r = config.colors.borderColor;
    document.addEventListener("DOMContentLoaded", function() {
        const chartContainer = document.getElementById("totalRevenueChart");
        const grow = document.querySelector("#growthChart");
        const dropdownMenu = document.querySelector(".dropdown-menu");
        let percentageData = null;
        let chartGrow = null;
        fetch('<?php echo _WEB . '/API/dashboardIncome' ?>')
            .then(response => response.json()) // Assuming the API returns JSON data
            .then(data => {

                const chartConfig = {
                    series: data.series, // Assuming data is in the format: [{name: "2021", data: [...]}, {name: "2020", data: [...]}]
                    chart: {
                        height: 400,
                        stacked: true,
                        type: "bar",
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: !1,
                            columnWidth: "22%",
                            borderRadius: 6,
                            startingShape: "rounded",
                            endingShape: "rounded"
                        }
                    },
                    colors: [config.colors.primary, config.colors.info],
                    dataLabels: {
                        enabled: !1
                    },
                    legend: {
                        show: !0,
                        horizontalAlign: "left",
                        position: "top",
                        markers: {
                            height: 8,
                            width: 8,
                            radius: 12,
                            offsetX: -3
                        },
                        labels: {
                            colors: e
                        },
                        itemMargin: {
                            horizontal: 10
                        }
                    },
                    grid: {
                        borderColor: r,
                        padding: {
                            top: 0,
                            bottom: -8,
                            left: 20,
                            right: 20
                        }
                    },
                    xaxis: {
                        categories: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                        labels: {
                            style: {
                                fontSize: "13px",
                                colors: e
                            }
                        },
                        axisTicks: {
                            show: !1
                        },
                        axisBorder: {
                            show: !1
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                fontSize: "13px",
                                colors: e
                            }
                        }
                    },
                    states: {
                        hover: {
                            filter: {
                                type: "none"
                            }
                        },
                        active: {
                            filter: {
                                type: "none"
                            }
                        }
                    }

                };

                const chart = new ApexCharts(chartContainer, chartConfig);
                chart.render();
                percentageData = data.incomePercent; // Store the percentage data
                const chartConfigGrow = {
                    series: [percentageData['2023']], // Default percentage for 2023 (adjust with the actual percentage value)
                    labels: ["Phát triển"],
                    chart: {
                        height: 240,
                        type: "radialBar"
                    },
                    plotOptions: {
                        radialBar: {
                            size: 150,
                            offsetY: 10,
                            startAngle: -150,
                            endAngle: 150,
                            hollow: {
                                size: "55%"
                            },
                            track: {
                                background: o,
                                strokeWidth: "100%"
                            },
                            dataLabels: {
                                name: {
                                    offsetY: 15,
                                    color: t,
                                    fontSize: "15px",
                                    fontWeight: "500",
                                    fontFamily: "Public Sans"
                                },
                                value: {
                                    offsetY: -25,
                                    color: t,
                                    fontSize: "22px",
                                    fontWeight: "500",
                                    fontFamily: "Public Sans"
                                }
                            }
                        }
                    },
                    colors: [config.colors.primary],
                    fill: {
                        type: "gradient",
                        gradient: {
                            shade: "dark",
                            shadeIntensity: .5,
                            gradientToColors: [config.colors.primary],
                            inverseColors: !0,
                            opacityFrom: 1,
                            opacityTo: .6,
                            stops: [30, 70, 100]
                        }
                    },
                    stroke: {
                        dashArray: 5
                    },
                    grid: {
                        padding: {
                            top: -35,
                            bottom: -10
                        }
                    },
                    states: {
                        hover: {
                            filter: {
                                type: "none"
                            }
                        },
                        active: {
                            filter: {
                                type: "none"
                            }
                        }
                    }

                };

                chartGrow = new ApexCharts(grow, chartConfigGrow);
                chartGrow.render();
                const growthReportId = document.getElementById('growthReportId');
                const yearDropdown = document.getElementById('yearDropdown');
                Object.keys(data.incomePercent).forEach(year => {
                    if (growthReportId.textContent == "")
                        growthReportId.textContent = 2023;
                    const yearLink = document.createElement('a');
                    yearLink.setAttribute('class', 'dropdown-item');
                    yearLink.setAttribute('href', 'javascript:void(0)');
                    yearLink.textContent = year;
                    yearLink.setAttribute('data-year', year);
                    yearLink.addEventListener('click', (event) => {
                        if (event.target.dataset.year) {
                            const selectedYear = event.target.dataset.year;
                            updateChart(year);
                        }
                    });

                    yearDropdown.appendChild(yearLink);
                });
            })
            .catch(error => console.error('Error fetching data:', error));



        function updateChart(year) {
            if (percentageData[year]!=null) {
                // Update the chart series with the stored percentage data
                console.log([percentageData[year]]);
                chartGrow.updateSeries([percentageData[year]]);
            }
            growthReportId.textContent = year;
        }

    });
</script>