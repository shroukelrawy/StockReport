<div class="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-lg-8">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Total Revenue</h5>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="totalRevenue"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded bx-lg text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalRevenue">
                              <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                          </div>
                        </div>
                        <div id="totalRevenueChart" class="px-3"></div>
                      </div>
                      <div class="col-lg-4 d-flex align-items-center">
                        <div class="card-body px-xl-9">
                          <div class="text-center mb-6">
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-primary">
                                <script>
                                  document.write(new Date().getFullYear() - 1);
                                </script>
                              </button>
                              <button
                                type="button"
                                class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">2021</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">2020</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">2019</a></li>
                              </ul>
                            </div>
                          </div>

                          <div id="growthChart"></div>
                          <div class="text-center fw-medium my-6">62% Company Growth</div>

                          <div class="d-flex gap-3 justify-content-between">
                            <div class="d-flex">
                              <div class="avatar me-2">
                                <span class="avatar-initial rounded-2 bg-label-primary"
                                  ><i class="bx bx-dollar bx-lg text-primary"></i
                                ></span>
                              </div>
                              <div class="d-flex flex-column">
                                <small>
                                  <script>
                                    document.write(new Date().getFullYear() - 1);
                                  </script>
                                </small>
                                <h6 class="mb-0">$32.5k</h6>
                              </div>
                            </div>
                            <div class="d-flex">
                              <div class="avatar me-2">
                                <span class="avatar-initial rounded-2 bg-label-info"
                                  ><i class="bx bx-wallet bx-lg text-info"></i
                                ></span>
                              </div>
                              <div class="d-flex flex-column">
                                <small>
                                  <script>
                                    document.write(new Date().getFullYear() - 2);
                                  </script>
                                </small>
                                <h6 class="mb-0">$41.2k</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>