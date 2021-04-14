if ($('#salesanalytic').length) {

    var chart = AmCharts.makeChart("salesanalytic", {
        "type": "serial",
        "theme": "light",
        "dataDateFormat": "YYYY-MM-DD",
        "precision": 1,
        "valueAxes": [{
            "id": "v1",
            "title": "Nhập/xuất sản phẩm (Cái)",
            "position": "left",
            "autoGridCount": false,
            "labelFunction": function(value) {
                return Math.round(value);
            }
        }, {
            "id": "v2",
            "title": "Tiền nhập/xuất sản phẩm (Tr)",
            "gridAlpha": 0,
            "position": "right",
            "autoGridCount": false
        }],
        "graphs": [{
            "id": "g3",
            "valueAxis": "v1",
            "lineColor": "#F3F8FB",
            "fillColors": "#F3F8FB",
            "fillAlphas": 1,
            "type": "column",
            "title": "Nhập sản phẩm",
            "valueField": "sales2",
            "clustered": false,
            "columnWidth": 10,
            "legendValueText": "[[value]]",
            "balloonText": "[[title]]<br /><small style='font-size: 130%'>[[value]]</small>"
        }, {
            "id": "g4",
            "valueAxis": "v1",
            "lineColor": "#5C6DF4",
            "fillColors": "#5C6DF4",
            "fillAlphas": 1,
            "type": "column",
            "title": "Xuất sản phẩm",
            "valueField": "sales1",
            "clustered": false,
            "columnWidth": 6,
            "legendValueText": "[[value]]",
            "balloonText": "[[title]]<br /><small style='font-size: 130%'>[[value]]</small>"
        }, {
            "id": "g1",
            "valueAxis": "v2",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "bulletSize": 5,
            "hideBulletsCount": 50,
            "lineThickness": 2,
            "lineColor": "#815FF6",
            "type": "smoothedLine",
            "title": "Tiền nhập sản phẩm",
            "useLineColorForBulletBorder": true,
            "valueField": "market1",
            "balloonText": "[[title]]<br /><small style='font-size: 130%'>[[value]]</small> tr"
        }, {
            "id": "g2",
            "valueAxis": "v2",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "bulletSize": 5,
            "hideBulletsCount": 50,
            "lineThickness": 2,
            "lineColor": "#ffe598",
            "type": "smoothedLine",
            "dashLength": 5,
            "title": "Tiền xuất sản phẩm",
            "useLineColorForBulletBorder": true,
            "valueField": "market2",
            "balloonText": "[[title]]<br /><small style='font-size: 130%'>[[value]]</small> tr"
        }],
        "chartScrollbar": {
            "graph": "g1",
            "oppositeAxis": false,
            "offset": 50,
            "scrollbarHeight": 45,
            "backgroundAlpha": 0,
            "selectedBackgroundAlpha": 0.5,
            "selectedBackgroundColor": "#f9f9f9",
            "graphFillAlpha": 0.1,
            "graphLineAlpha": 0.4,
            "selectedGraphFillAlpha": 0,
            "selectedGraphLineAlpha": 1,
            "autoGridCount": true,
            "color": "#95a1f9"
        },
        "chartCursor": {
            "pan": true,
            "valueLineEnabled": true,
            "valueLineBalloonEnabled": true,
            "cursorAlpha": 0,
            "valueLineAlpha": 0.2
        },
        "categoryField": "date",
        "categoryAxis": {
            "parseDates": true,
            "dashLength": 1,
            "minorGridEnabled": true,
            "color": "#5C6DF4"
        },
        "legend": {
            "useGraphSettings": true,
            "position": "top"
        },
        "balloon": {
            "borderThickness": 1,
            "shadowAlpha": 0
        },
        "export": {
            "enabled": false
        },
        "dataProvider": [{
            "date": "2019-11-12",
            "market1": 10.2,
            "market2": 16.4,
            "sales1": 1532,
            "sales2": 2000
        }, {
            "date": "2019-12-12",
            "market1": 14.5,
            "market2": 22.3,
            "sales1": 2030,
            "sales2": 2800
        }, {
            "date": "2020-01-12",
            "market1": 13.8,
            "market2": 3.7,
            "sales1": 630,
            "sales2": 2645
        }, {
            "date": "2020-02-12",
            "market1": 2,
            "market2": 3.4,
            "sales1": 620,
            "sales2": 400
        }, {
            "date": "2020-03-12",
            "market1": 2,
            "market2": 16,
            "sales1": 2400,
            "sales2": 400
        }, {
            "date": "2020-04-12",
            "market1": 13.3,
            "market2": 26.1,
            "sales1": 3128,
            "sales2": 1540
        }, {
            "date": "2020-05-12",
            "market1": 14,
            "market2": 22.4,
            "sales1": 1989,
            "sales2": 1500
        }]
    });
}
//------------echarts2

/*-------------- 11 line chart amchart end ------------*/