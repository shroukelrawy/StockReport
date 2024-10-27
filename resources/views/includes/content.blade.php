<div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-xxl-8 mb-6 order-0">
                  <div class="card">
                    <div class="d-flex align-items-start row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary mb-3">Congratulations John! 🎉</h5>
                          <p class="mb-6">
                            You have done 72% more sales today.<br />Check your new badge in your profile.
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-6">
                          <img
                            src="{{asset('assets/img/illustrations/man-with-laptop.png')}}"
                            height="175"
                            class="scaleX-n1-rtl"
                            alt="View Badge User" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-4 col-md-4 order-1"> -->
                <div class="container-xxl flex-grow-1 container-p-y">
                  <div class="row">
                     <!-- Total Stock Card -->
                  <div class="col-lg-4 col-md-6 col-6 mb-4">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('assets/img/icons/unicons/chart-success.png')}}"
                                alt="chart success"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded text-muted"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class="mb-1">Total Stock</p>
                          <h4 class="card-title mb-3">{{ $currentStock }}</h4>
                          <!-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> {{ $percentageChange }}%</small> -->
                          <small class="text-success fw-medium">
                                <i class="bx {{ $percentageChange >= 0 ? 'bx-up-arrow-alt' : 'bx-down-arrow-alt' }}"></i> 
                                {{ number_format($percentageChange, 2) }}%
                            </small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 mb-4">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('assets/img/icons/unicons/wallet-info.png')}}"
                                alt="wallet info"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded text-muted"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>

                              <!-- Total Sales Card -->
                          <p class="mb-1">Total Sales</p>
                          <h4 class="card-title mb-3">{{ $totalSales }}</h4>
                          <!-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                          <small class="fw-medium {{ $salesPercentageChange >= 0 ? 'text-success' : 'text-danger' }}">
                                <i class="bx {{ $salesPercentageChange >= 0 ? 'bx-up-arrow-alt' : 'bx-down-arrow-alt' }}"></i>
                                {{ number_format($salesPercentageChange, 2) }}%
                            </small>
                        </div>
                      </div>
                    </div>

                    <!-- Total Purchases Card -->
                    <div class="col-lg-4 col-md-6 col-6 mb-4">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{asset('assets/img/icons/unicons/chart-success.png')}}"
                                alt="wallet info"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded text-muted"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <p class="mb-1">Total Purchases</p>
                          <h4 class="card-title mb-3">{{ $totalPurchases }}</h4>
                          <!-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> -->
                          <small class="text-success fw-medium">
                          <i class="bx bx-up-arrow-alt"></i> {{ number_format($purchasesPercentageChange, 2) }}%
                          </small>
                        </div>
                      </div>
                    </div>
<!--  -->
                  </div>



  <!-- Row for Transaction Table -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Transaction History</h5>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Transaction Type</th>
              <th>Quantity</th>
              <th>Amount</th>
              <th>Date</th>

            </tr>
          </thead>
          <tbody>
            @foreach($transactionDetails as $transaction) 
              <tr>
                <td>{{ $transaction->product->name }}</td> <!-- Access product name -->
                <td>{{ $transaction->type }}</td> <!-- Ensure 'type' is the correct field -->
                <td>{{ $transaction->quantity }}</td>
                <td>{{ $transaction->amount }}</td>
                <td>{{ $transaction->created_at->format('Y-m-d') }}</td>

              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div> 


</div>

<!-- رابط CDN لمكتبة ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Stock Trends Over Time</h5>
        <div id="stockTrendsChart"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'line',
                height: 350
            },
            series: [
                {
                    name: 'Purchases',
                    data: @json($purchaseData)
                },
                {
                    name: 'Sales',
                    data: @json($salesData)
                },
                {
                    name: 'Returns',
                    data: @json($returnsData)
                }
            ],
            xaxis: {
                categories: @json($dateLabels),
                title: { text: 'Date' }
            },
            yaxis: { title: { text: 'Quantity' } }
        };
       

        var chart = new ApexCharts(document.querySelector("#stockTrendsChart"), options);
        chart.render();
    });
</script>

<div class="col-md-6 col-lg-4 order-1 mb-6">
  <div class="card h-100">
    <div class="card-header nav-align-top">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <button
            type="button"
            class="nav-link active"
            role="tab"
            data-bs-toggle="tab"
            data-bs-target="#navs-tabs-line-card-stock"
            aria-controls="navs-tabs-line-card-stock"
            aria-selected="true">
            Stock Trends
          </button>
        </li>
      </ul>
    </div>
    
    <div class="card-body">
      <div class="tab-content p-0">
        <div class="tab-pane fade show active" id="navs-tabs-line-card-stock" role="tabpanel">
          <div class="d-flex mb-6">
            <div class="avatar flex-shrink-0 me-3">
              <img src="{{asset('assets/img/icons/unicons/chart.png')}}" alt="Trends" />
            </div>
            <div>
              <p class="mb-0">Stock Trends</p>
              <div class="d-flex align-items-center">
                <h6 class="mb-0 me-1">Monthly Overview</h6>
              </div>
            </div>
          </div>

          <!-- ApexChart for Stock Trends -->
          <div id="stockTrendsChart"></div>
          
          <div class="d-flex align-items-center justify-content-center mt-6 gap-3">
            <div>
              <h6 class="mb-0">Data over past months</h6>
              <small>Track purchases, sales, and returns</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ApexChart Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var options = {
      chart: {
        type: 'line',
        height: 350
      },
      series: [
        {
          name: 'Purchases',
          data: @json($purchaseData)
        },
        {
          name: 'Sales',
          data: @json($salesData)
        },
        {
          name: 'Returns',
          data: @json($returnsData)
        }
      ],
      xaxis: {
        categories: @json($dateLabels),
        title: { text: 'Date' }
      },
      yaxis: {
        title: { text: 'Quantity' }
      },
      colors: ['#008FFB', '#00E396', '#FF4560'],
      dataLabels: { enabled: false },
      stroke: { curve: 'smooth' }
    };

    var chart = new ApexCharts(document.querySelector("#stockTrendsChart"), options);
    chart.render();
  });
</script>

                </div>