@include('header')
<!--**********************************
            Content body start
        ***********************************-->
	<div class="content-body">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li><h5 class="bc-title">Dashboard</h5></li>
			</ol>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-2 col-sm-3">
				    <div class="card chart-grd same-card">
				      	<div class="card-body depostit-card p-0">
							<div class="depostit-card-media d-flex align-items-start justify-content-between pb-0">
								<div>
									<img src="{{ asset('images/icon1.png') }}" style="width: 50px; height: 50px;">
									<h4>70%</h4>
								</div>
								<div class="text-right">
									<h2>264</h2>
									<h4>Moving</h4>
								</div>
							</div>
						    <div class="depostit-card-media d-flex align-items-end justify-content-between pb-2">
						        <div>
						          	<h6>View Details</h6>
						        </div>
							    <div>
							        <h6>View On Map</h6>
							    </div>
						    </div>
				    	</div>
				  	</div>
				</div>
				<div class="col-xl-2 col-sm-3">
				    <div class="card chart-grd same-card">
				      	<div class="card-body depostit-card p-0">
				        	<div class="depostit-card-media d-flex align-items-start justify-content-between pb-0">
						        <div>
								   	<img src="{{ asset('images/icon2.png') }}" style="width: 50px; height: 50px;">
						          	<h4>70%</h4>
						        </div>
							    <div class="text-right">
							        <h2>264</h2>
							        <h4>Stopped</h4>
							    </div>
				      		</div>
						    <div class="depostit-card-media d-flex align-items-end justify-content-between pb-2">
						        <div>
						          	<h6>View Details</h6>
						        </div>
							<div>
							    <h6>View On Map</h6>
							</div>
						</div>
				    </div>
				</div>
			</div>
			<div class="col-xl-2 col-sm-3">
				<div class="card chart-grd same-card">
				      	<div class="card-body depostit-card p-0">
				        	<div class="depostit-card-media d-flex align-items-start justify-content-between pb-0">
						        <div>
									<img src="{{ asset('images/icon3.png') }}" style="width: 50px; height: 50px;">
						          	<h4>70%</h4>
						        </div>
							    <div>
							        <h2>264</h2>
							        <h4 class="text-right">Idle</h4>
							    </div>
				      		</div>
						    <div class="depostit-card-media d-flex align-items-end justify-content-between pb-2">
						        <div>
						          	<h6>View Details</h6>
						        </div>
							    <div>
							        <h6>View On Map</h6>
							    </div>
						    </div>
				    	</div>
				  	</div>
				</div>
				<div class="col-xl-2 col-sm-3">
				    <div class="card chart-grd same-card">
				      	<div class="card-body depostit-card p-0">
				        	<div class="depostit-card-media d-flex align-items-start justify-content-between pb-0">
						        <div>
								   	<img src="{{ asset('images/icon4.png') }}" style="width: 50px; height: 50px;">
						          	<h4>70%</h4>
						        </div>
							    <div class="text-right">
							        <h2>264</h2>
							        <h4>Inactive</h4>
							    </div>
				      			</div>
						      	<div class="depostit-card-media d-flex align-items-end justify-content-between pb-2">
						        	<div>
						          		<h6>View Details</h6>
						        	</div>
							        <div>
							          	<h6>View On Map</h6>
							        </div>
						      	</div>
				    		</div>
				  		</div>
					</div>
					<div class="col-xl-2 col-sm-3">
				    	<div class="card chart-grd same-card">
				      		<div class="card-body depostit-card p-0">
				        		<div class="depostit-card-media d-flex align-items-start justify-content-between pb-0">
						           <div>
								   <img src="{{ asset('images/icon5.png') }}" style="width: 50px; height: 50px;">
						          	 <h4>70%</h4>
						            </div>
							        <div class="text-right">
							          <h2>264</h2>
							          <h4>Out Of Service</h4>
							        </div>
				      			</div>
						      	<div class="depostit-card-media d-flex align-items-end justify-content-between pb-2">
						        	<div>
						          		<h6>View Details</h6>
						        	</div>
							        <div>
							          	<h6>View On Map</h6>
							        </div>
						      	</div>
				    		</div>
				  		</div>
					</div>
				</div>
				<div class="col-xl-12 col-md-6 flag">
					<div class="card overflow-hidden">
						<div class="card-header border-0">
							<h4 class="heading mb-0">Track On Map</h4>
						</div>
						<div class="card-body pe-0">
							<div class="row">
								<div class="col-xl-12">
  									<div id="map"></div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-md-6 flag">
				<div class="card overflow-hidden">
					<div class="card-body pe-0">
						<div class="row">
							<div class="col-xl-6 bst-seller">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="heading mb-0">Selected Records</h4>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive active-projects active-projects ItemsCheckboxSec selling-product shorting ">
											<table id="marked-table" class="table ">
												<thead>
														<tr>
															<th>ID</th>
															<th>Name</th>
															<th>Price</th>
														</tr>
												</thead>
												<tbody>
													
												</tbody>
											</table>
										</div>	
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div id="chart-container" style="width:100%; height:400px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-12 bst-seller">
				<div class="card">
					<div class="card-body p-0">
						<div class="table-responsive active-projects style-1 shorting ">
							<div class="tbl-caption">
								<h4 class="heading mb-0">Records</h4>
								<div class="row mb-3">
									<div class="col-md-6">
										<input type="text" class="form-control" id="search-box" placeholder="Search...">
									</div>
								</div>
							</div>
							<div id="data-container" data-url="{{ route('products.search') }}"> 
								@include('partials.products_table', ['products' => $products])
							</div>
							<div id="pagination">
								@include('partials.pagination', ['totalPages' => $totalPages, 'currentPage' => $currentPage])
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
        <!--**********************************
            Content body end
        ***********************************-->
        @include('footer')
		