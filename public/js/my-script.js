//Set Map center and Markers
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 12.9587, lng: 77.6511} // Bangalore coordinates
    });
    var markers = [
        {lat: 12.9592, lng: 77.6974, icon: '/markers/stop.svg', scaledSize: new google.maps.Size(10, 10)}, // Location 1
        {lat: 12.9587, lng: 77.6511, icon: '/markers/moving.svg', scaledSize: new google.maps.Size(30, 30)}, // Location 2
        {lat: 12.9337, lng: 77.6212, icon: '/markers/idle.svg', scaledSize: new google.maps.Size(10, 10)} // Location 3
    ];
    for (var i = 0; i < markers.length; i++) {
        var marker = new google.maps.Marker({
            position: markers[i],
            map: map,
            icon: markers[i].icon,
            scaledSize: markers[i].scaledSize
        });
    }
}

// -----------Chart Js code---------------
var chart = echarts.init(document.getElementById('chart-container'));
// Chart configuration options
var options = {
    title: {
        text: 'Example Chart'
    },
    xAxis: {
        type: 'category',
        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
    },
    yAxis: {
        type: 'value'
    },
    series: [{
        name: 'Bar 1',
        type: 'bar',
        data: [1000, 2000, 3000, 4000, 5000, 6000]
    },
    {
        name: 'Bar 2',
        type: 'bar',
        data: [1500, 2500, 3500, 4500, 5500, 6500]
    }]
};
// Set chart options and render the chart
chart.setOption(options);

// * Loads a page of data using AJAX and updates the HTML of the data container and pagination elements.
// * If a search query is entered, the search results will be paginated instead of all data.
function loadPage(page) {
    var searchQuery = $('#search-box').val() || '';
    var url = (searchQuery ? '/search?searchQuery=' + searchQuery + '&page=' + page : '/' + '?page=' + page);
    $.ajax({
        url: url,
        type: 'get',
        success: function(response) {
            $('#data-container').html(response.data);
            $('#pagination').html(response.pagination);
        },
        error: function (data) {
            console.log(data);
        }
    });
}

// * If a search query is entered, updates the HTML of the data container and pagination elements.
$('#search-box').on('input', function () {

    var searchQuery = $(this).val();
    var url = $('#data-container').data('url');

    $.ajax({
        url: url,
        type: 'GET',
        data: {searchQuery: searchQuery},
        success: function(response) {
            $('#data-container').html(response.data);
            $('#pagination').html(response.pagination);
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
});

var counter = 1;
$('#data-container').on('click', '.mark-btn', function() {
    // get the product data from the clicked row
    var $row = $(this).closest('tr');
    var id = $row.find('td:first-child').text();
    var title = $row.find('td:nth-child(2)').text();
    var description = $row.find('td:nth-child(3)').text();
    var price = $row.find('td:nth-child(4)').text();
    
    // add the marked product to the second table
    $('#marked-table tbody').append(
        '<tr id="marked-product-' + id + '">' +
        '<td>' + counter + '</td>' +
        '<td>' + title + '</td>' +
        '<td>' + price + '</td>' +
        '</tr>'
    );

    // increment the counter
    counter++;
});

//Product Delete using Ajax
$('#data-container').on('click', '.delete-product', function() {
    var productId = $(this).data('id');
    var url = $(this).data('url');
    var row = $(this).closest('tr');
    $.ajax({
        url: url,
        type: 'DELETE',
        success: function() {
            row.remove();
        },
        error: function(xhr, status, error) {
            if (xhr.status == 404) {
                alert('Product not found!');
            } else if (xhr.status == 500) {
                alert('Server error, please try again later.');
            } else {
                console.error(xhr.responseText);
                alert('Error deleting product!');
            }
        }
    });
});            

