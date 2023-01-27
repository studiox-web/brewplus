

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>Main Street Brewing Loyalty</title>

		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/moment-2.18.1/dt-1.10.18/b-1.5.6/b-html5-1.5.6/r-2.2.2/sl-1.3.0/datatables.min.css">
		<link rel="stylesheet" type="text/css" href="css/generator-base.css">
		<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="css/pretty-checkbox.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jq-3.3.1/moment-2.18.1/dt-1.10.18/b-1.5.6/b-html5-1.5.6/r-2.2.2/sl-1.3.0/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/table.BP_MainSt_Cust.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body class="dataTables">


            <div id="customForm">

							<div class="TotalBadges">
								<button type="button" class="btn btn-primary StampsBadgeButton">
                    Stamps <span class="badge badge-light StampsBadgeSpan">0</span>
                  </button>

                  <button type="button" class="btn btn-primary CardsBadgeButton">
                    Cards <span class="badge badge-light CardsBadgeSpan">0</span>
									</button>
									
							</div>

								<div class="bs-example">
										<ul class="nav nav-tabs">
												<li class="nav-item">
														<a href="#customer" class="nav-link active" data-toggle="tab">Customer</a>
												</li>
												<li class="nav-item">
														<a href="#stamps" class="nav-link" data-toggle="tab">Add</a>
												</li>

												<li class="nav-item">
														<a href="#redeem" class="nav-link" data-toggle="tab">Redeem</a>
												</li>

												<li class="nav-item disabled">
														<a href="#history" class="nav-link" data-toggle="tab">History</a>
												</li>
										</ul>
										
										<div class="tab-content">
												<div class="tab-pane fade show active" id="customer">
													
														<div class="CustomerContainer">
													
																	<editor-field name="firstname"></editor-field>
																	<editor-field name="lastname"></editor-field>
																	<editor-field name="email"></editor-field>
																	<editor-field name="newsletter"></editor-field>
												
											
															</div>

												</div>
												<div class="tab-pane fade" id="stamps">
													
																	<div data-editor-template="stamps" class="StampsContainer CheckboxContainer"></div>
										

																	

												</div>

												<div class="tab-pane fade" id="cards">
											
																<div data-editor-template="cards" class="CardsContainer CheckboxContainer"></div>
										
															<button type="button" class="btn btn-primary">
																Redeem Cards
															</button>
												</div>


<div class="tab-pane fade" id="redeem">




<div class="card-deck">
  <div class="card">

  <div class="card-header">
    Select prize to redeem
  </div>

    <div class="card-body">

	<div class="list-group">

<select title="Select your prize" name="redeem-prize" class="redeem-prize selectpicker form-control form-control-lg">
  <option>Select your prize...</option>
  <option data-subtext="petrification" data-points="1">Monthly Draw</option>
  <option data-subtext="petrification" data-points="2">6 oz. Beer</option>
  <option data-subtext="petrification" data-points="3">Growler Fill</option>
  <option data-subtext="petrification" data-points="4">T-Shirt</option>
  <option data-subtext="petrification" data-points="7">Nachos + 2 Flights</option>
  <option data-subtext="petrification" data-points="10">Tour + Beer</option>
  <option data-subtext="petrification" data-points="12">ULTIMATE BREW DAY!</option>
  
</select>

</div>

<input type="text" class="points-input" readonly />

    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Redeem prize <span class="badge badge-light">9</span></a>

    </div>

  </div>


  <div class="card">
    <div class="card-body">

  <editor-field name="points"></editor-field>

    </div>
  </div>

</div>





</div>


												<div class="tab-pane fade" id="history">
									
																<editor-field name="history"></editor-field>
																
															<!--
																<button type="button" class="btn btn-primary ClearLog">
																	Clear Log
																</button>
															
															-->

												</div>

										</div>
								</div>
          

					
				</div>

		<div class="container">

			<div id="LogoContainer">
				<img src="images/logo.jpg">
			</div>

			<div id="TitleContainer">
				<h1>Growler Loyalty Program</h1>
			</div>




			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="BP_MainSt_Cust" width="100%">
				<thead>
					<tr>
						<th>Surname</th>
						<th>First name</th>
						<th>Email</th>
						<th>Newsletter</th>
						<th>Cards</th>
					</tr>
				</thead>
			</table>

		</div>
		
	</body>
</html>
