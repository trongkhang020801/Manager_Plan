if (document.querySelector('.table-order')) {
    const tableBody = document.querySelector('.table-order tbody')
    function loadOrder(orderStatus = '') {
        $.post('./admin/getOrderListAdmin', { orderStatus }, data => {
            tableBody.innerHTML = data
            $(document).ready(function () {
                $('#dataTable').DataTable();
            });
        })
    }
    const btnFilter = document.querySelectorAll('.btn-filter-order')
    btnFilter.forEach((item, index) => {
        item.onclick = () => {
            if (index > 0)
                loadOrder(index)
            else
                loadOrder()
        }
    })
    loadOrder()
}

if (document.querySelector('.statistical')) {
    console.log('cc')
    let myChart, myChart1
    let date = new Date()
    let year = date.getFullYear();
    let month = date.getMonth() + 1;
    month = String(month).padStart(2, '0')
    let today = String(date.getDate()).padStart(2, '0')
    // let today2 = String(date.getDate()).padStart(2, '0')

    let nextDay = year + '-' + month + '-' + today
    // let nextDay2 = year + '-' + month + '-' + today2

    let fromDay

    let fromDate = new Date()

    let parseDate = (date, month, day = '01') => {

        let year = date.getFullYear();
        month = String(month).padStart(2, '0')
        let today = day

        return datePattern = year + '-' + month + '-' + today
    }


    let loadChart = (fromday, nextday, label) => {
        console.log(fromday)
        console.log(nextday)
        document.querySelector('.from-date input').value = fromday
        document.querySelector('.next-date input').value = nextday

        $.post('./admin/statistical', {fromday, nextday }, data => {
            let dt = JSON.parse(data)
            let labelArr = [];
            let salesArr = [];
            let profitArr = [];
            let quantityArr = [];
            let orderTotalArr = [];
            dt.forEach(item => {
                labelArr.push(item.order_date)
                salesArr.push(item.sales)
                profitArr.push(item.profit)
                quantityArr.push(item.quantity)
                orderTotalArr.push(item.order_total)
            })
            const labels = labelArr
            //chart sales
            const chartData = {
                labels: labels,
                datasets: [{
                    label: 'Danh thu',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: salesArr,
                }, {
                    label: 'Lợi nhuận',
                    backgroundColor: 'rgb(129, 201, 129)',
                    borderColor: 'rgb(129, 201, 129)',
                    data: profitArr,
                }]
            }

            const config = {
                type: 'bar',
                data: chartData,
                options: {}
            }
            myChart = new Chart(
                document.getElementById('myChart'),
                config
            )
            //chart order

            const chartData1 = {
                labels: labels,
                datasets: [{
                    label: 'Số sản phẩm bán ra',
                    backgroundColor: 'rgb(118, 32, 199)',
                    borderColor: 'rgb(118, 32, 199)',
                    data: quantityArr,
                },  {
                    label: 'Số lượng đơn hàng',
                    backgroundColor: 'rgb(17, 197, 221)',
                    borderColor: 'rgb(17, 197, 221)',
                    data: orderTotalArr,
                }]
            }


            const config1 = {
                type: 'bar',
                data: chartData1,
                options: {}
            }

            myChart1 = new Chart(
                document.getElementById('myChart1'),
                config1
            )
        })
    }
    //get day this week
    {
        if (fromDate.getDay() == 0)
            // console.log('cc')
            fromDate.setDate(-7)
        else
            fromDate.setDate(fromDate.getDate() - date.getDay() + 1)

        let year = fromDate.getFullYear();
        let month = fromDate.getMonth() + 1;
        month = String(month).padStart(2, '0')
        let today = String(fromDate.getDate()).padStart(2, '0')
        fromDay = year + '-' + month + '-' + today

    }

    loadChart(fromDay, nextDay, 'Tuần này')
    let select = document.getElementById('select-date')
    select.addEventListener('change', () => {
        switch (select.value) {
            case 'week': {
                fromDate = new Date()
                if (date.getDay() == 0)
                    fromDate.setDate(-7)
                else
                    fromDate.setDate(fromDate.getDate() - date.getDay() + 1)

                let year = fromDate.getFullYear();
                let month = fromDate.getMonth() + 1;
                month = String(month).padStart(2, '0')
                let today = String(fromDate.getDate()).padStart(2, '0')

                fromDay = year + '-' + month + '-' + today
                myChart.destroy()
                myChart1.destroy()

                loadChart(fromDay, nextDay, 'Tuần này')
            }
                break
            case 'month': {
                fromDate = new Date()
                fromDay = parseDate(fromDate, fromDate.getMonth() + 1)
                myChart.destroy()
                myChart1.destroy()
                loadChart(fromDay, nextDay, 'Tháng này')
            }
                break
            case 'quarter': {
                fromDate = new Date()
                fromDay = parseDate(fromDate, fromDate.getMonth() + 1)
                myChart.destroy()
                myChart1.destroy()
                loadChart(fromDay, nextDay, 'Quí này')
            }
            case 'year': {
                fromDate = new Date()
                fromDay = parseDate(fromDate, 1)
                myChart.destroy()
                myChart1.destroy()
                loadChart(fromDay, nextDay, 'Năm này')
            }
        }

    })

    let form = document.querySelector('.filter-choose-date')

    form.addEventListener('submit', () => {
        let fromday = document.querySelector('.from-date input').value
        let nextday = document.querySelector('.next-date input').value

        myChart.destroy()
        myChart1.destroy()
        loadChart(fromday, nextday, `Từ ngày ${fromday} đến ngày ${nextday}`)
    })


}