<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


	<style>
		@media print{
			body {
            margin: 1cm;
            padding: 0;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			width: 100%;
			/* max-width: fit-content; */
        }
		}
		@media screen {
			body {
            margin: 100px;
            padding: 0;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			width: 100%;
			max-width: fit-content;
        	}
		}
		.content-container {
			text-align: center;
			padding: 0;
			margin: 0 auto;
		}

		.content-header {
			/* display: inline-block; */
			margin-top: 0;
			text-align: center;
		}

		.title {
			display: block;
		}

		.title-number {
			text-align: right;
			padding: 0;
			margin-right: 40px;
			font-size: 9px;
		}

		.content {
			display: flex;
			justify-content: center;
			margin-top: 50px;
			/* page-break-inside: avoid; */
		}

		.content-table,
		.content-graph {
			flex: 1;
			text-align: center;
		}

		table {
			border-collapse: collapse;
			width: 100%;

		}

		table,
		th,
		td {
			/* border: 1px solid; */
			padding: 2px;
			font-size: 11px;
		}

		.content-graph {
			display: flex;
			flex-direction: column;
			align-items: center;
			/* text-align: left; */
			margin-left: 10px;
		}

		.content-graph .table{
			margin-left: 50px;
		}
		.graph {
			display: flex;
			/* justify-content: space-between; */
		}

		.canvas {
			max-width: 300px;
			height: 100px;
			width: 195px;
		}

		/* .page-number::after {
        content: counter(page);
    	} */
		#myTable thead,
		#myTable tbody,
		#myTable tr,
		#myTable th{
		border: none;
		font-size: 12px;
		}
		#myTable td {
			border: 1px solid;
		}

		#myTable{
			border-collapse: collapse;
		}

		.extended-overline {
			position: relative;
			text-decoration: none; /* Remove default overline */
		}

		.extended-overline::before {
			content: ""; /* Empty content */
			position: absolute;
			top: 0;
			left: -25px; /* Adjust this value to extend to the left */
			right: -35px; /* Adjust this value to extend to the right */
			border-top: 1px solid black; /* Or your desired line style and color */
		}
	</style>

</head>

<body>
	<div class="content-container">
		<div class="content-header" >
			<div class="title-number">
				<i>CSM 001</i> <br>
				<i>Rev.6/04-03-2023</i>
			</div>
			<div class="title">
				<h4>DOST-CO OFFICES/UNITS CITIZEN/CLIENT SATISFACTION SURVEY (CCSS) QUARTERLY REPORT  <br> <span style="font-size: 10px;">For the 2nd Quarter of Year 2023</span></h4>
				<!-- <h5>For the 2nd Quarter of Year 2023</h5> -->
			</div>
		</div>
		<div class="content" style="margin-top: 0; page-break-inside: avoid;">
			<div class="content-table">
				<table id="myTable">
					<thead>
						<tr>
							<th>OFFICE/UNIT:</th>
							<th colspan="7" style="border-bottom: 1px solid;">Information Technology Division</th>
						</tr>
						<tr>
						<th colspan="9">&nbsp;</th>
						</tr>
						<tr>
							<th colspan="2"></th>
							<th></th>
							<th style="border: 1px solid;" colspan="2">Internal</th>
							<th style="border: 1px solid;" colspan="2">External</th>
							<th style="border: 1px solid;" rowspan="2">Total</th>
						</tr>
						<tr>
							<th style="text-align: left;" colspan="2">Respondent's Profile</th>
							<th></th>
							<th style="border: 1px solid;" >On-site</th>
							<th style="border: 1px solid;" >Online</th>
							<th style="border: 1px solid;" >On-site</th>
							<th style="border: 1px solid;" >Online</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2" rowspan="12" style="vertical-align: top; text-align: left; "><span style="margin-right: 20px;">A.</span> Age Bracket:
							</th>
						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal">21 and under</th>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal">22 to 34</th>
							<td>15</td>
							<td>0</td>
							<td>1</td>
							<td>0</td>
							<td>20</td>
						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal">35 to 44</th>
							<td>3</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>3</td>
						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal">45 to 54</th>
							<td>1</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>1</td>
						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal">55 to 64</td>
							<td>5</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>5</td>
						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal">65 <i>yrs. old and above</i></th>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal">No Response</th>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<th style="text-align: left;" rowspan="3">Total Respondents</th>
							<td>28</td>
							<td>0</td>
							<td>1</td>
							<td>0</td>
							<td rowspan="3" style="font-weight: bold;">29</td>
						</tr>
						<tr style="font-weight: bold;">
							<td colspan="2">28</td>
							<td colspan="2">1</td>
						</tr>
						<tr>
						<tr style="border-right: 1px solid;">
							<th style="text-align: left; font-style: italic;">Percentage:</th>
							<td>97%</td>
							<td>0%</td>
							<td>3%</td>
							<td>0%</td>
							<td style="font-weight: bold;">100%</td>
						</tr>
						<tr>
							<th>&nbsp;</th>
						</tr>
					</tbody>
					<thead>
							<tr>
								<th style="border: none;" colspan="2"></th>
								<th style="border: none;"></th>
								<th style="border: 1px solid; text-decoration:underline;"  colspan="2">Internal</th>
								<th style="border: 1px solid; text-decoration:underline;"  colspan="2">External</th>
								<th style="border: 1px solid;"  rowspan="2">Total</th>
							</tr>
							<tr>
								<th style="border: none;" colspan="2"></th>
								<th style="border: none;"></th>
								<th style="border: 1px solid;" >On-site</th>
								<th style="border: 1px solid;" >Online</th>
								<th style="border: 1px solid;" >On-site</th>
								<th style="border: 1px solid;" >Online</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<th colspan="2" rowspan="9" style="vertical-align: top; text-align: left;"><span style="margin-right: 20px;">B.</span>Sex:</th>

						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal">Female</th>
							<td>21</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>21</td>
						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal">Male</th>
							<td>7</td>
							<td>0</td>
							<td>0</td>
							<td>1</td>
							<td>8</td>
						</tr>
						<tr>
							<th style="text-align: left; font-weight: normal" >No Response</th>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<th style="text-align: left;" rowspan="3">Total Respondents</th>
							<td>28</td>
							<td>0</td>
							<td>1</td>
							<td>0</td>
							<td style="font-weight: bold;" rowspan="3">29</td>
						</tr>
						<tr style="font-weight: bold;">
							<td colspan="2">28</td>
							<td colspan="2">1</td>
						</tr>
						<tr>
						<tr style="border-right: 1px solid;">
							<th style="text-align: left; font-style: italic;">Percentage:</th>
							<td>97%</td>
							<td>0%</td>
							<td>3%</td>
							<td>0%</td>
							<td style="font-weight: bold;">100%</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="content-graph" style="margin-top: 20px;">
				<div class="graph" style="margin-right: 40px;">
					<canvas class="canvas" id="internal-respondents-age" style="height: 200px; width: 250px; "></canvas>
					<canvas class="canvas" id="external-respondents-age" style="height: 200px; width: 250px;"></canvas>
				</div>
				<div class="graph">
					<canvas class="canvas" id="internal-respondents-sex" style="height: 50px; width: 90px;"></canvas>
					<canvas class="canvas" id="external-respondents-sex" style="height: 50px; width: 90px;"></canvas>
				</div>
				<div class="graph">
					<canvas id="sex-distribution" style="height: 200px; width: 400px; max-width: 350px;"></canvas>
				</div>
			</div>
		</div>
		<!-- A section			 -->
		<div class="content">
			<div class="content-table">
				<table id="question_1">
					<thead>
						<tr>
							<th style="text-align: left;" colspan="4"><i>Citizen/Client Satisfaction Feedback</i></th>
						</tr>
						<tr>
							<th style="vertical-align: top; text-align: left;">A.</th>
							<th colspan="4" style="text-align: left;">Responsiveness to queries/concerns</th>
							<th colspan="4" style="text-decoration: underline;">Number of <i>Responses</i></th>
							<th style="text-decoration: underline;">Total</th>
						</tr>
						<tr>
							<th rowspan="12"></th>
							<th>Rating</th>
							<th style="width: 15px;">&nbsp;</th>
							<th style="text-align: left;" colspan="2" >Performace/<i>Experience</i></th>
							<th>Internal</th>
							<th>E.Rating</th>
							<th>External</th>
							<th>E.Rating</th>
							<th style="text-decoration: underline;">E.Rating</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr></tr>
							<td></td>
							<td>5</td>
							<td></td>
							<td colspan="2"  style="text-align: left;">Very Satisfied</td>
							<td>30</td>
							<td>150</td>
							<td>3</td>
							<td>15</td>
							<th>165</th>
						</tr>
						<tr>
						<td></td>
							<td>4</td>
							<td></td>
							<td colspan="2"  style="text-align: left;">Satisfied</td>
							<td>1</td>
							<td>4</td>
							<td>0</td>
							<td>0</td>
							<th>4</th>
						</tr>
						<tr>
						<td></td>
							<td>3</td>
							<td></td>
							<td colspan="2"  style="text-align: left;">Neutral</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
						<td></td>
							<td>2</td>
							<td></td>
							<td  colspan="2" style="text-align: left;">Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
						<td></td>
							<td>1</td>
							<td></td>
							<td colspan="2"  style="text-align: left;">Very Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="2" >Total</td>
							<td>31</td>
							<td>154</td>
							<td>3</td>
							<td>15</td>
							<th>169</th>
						</tr>
						<tr >
							<td></td>
							<td  style="border: 1px solid; border-bottom: none;" rowspan="2">97%</td>
							<td></td>
							<td colspan="2" style="text-align: left;">No Response</td>
							<td>0</td>
							<td></td>
							<td>0</td>
							<td></td>
							<th>0</th>
						</tr>
						<tr style="font-weight: bold;">
							<td></td>
							<td></td>
							<td colspan="2" style="text-align: left; ">Average Rating</td>
							<td></td>
							<td>4.97</td>
							<td></td>
							<td>5.00</td>
							<td>4.97</td>
						</tr>
						<tr>
							<td></td>
							<td style="border: 1px solid; border-top: none; border-bottom: 1px solid; display: block; padding: 0;" rowspan="4">To attain VS<br>rating from 80%<br>of survery<br>respondents</td>
						</tr> -->
					</tbody>

				</table>
			</div>
			<div class="content-graph">
				<div class="graph">
					<canvas class="canvas" id="a-internal-responses" style="height: 90px; width: 200px; "></canvas>
					<canvas class="canvas" id="a-external-responses" style="height: 90px; width: 200px;"></canvas>
				</div>
				<div class="table" >
					<table style="width: 700px; margin: 0;">
						<tbody style="display: flex; ">
							<tr style="margin-left: 30px;">
								<th style="padding-right: 100px;">Internal:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
							<tr style="margin-left: 80px;">
								<th style="padding-right: 100px;">External:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th colspan="6">Overall responsiveness to queries/concerns rating: Very Satisfied</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- B section			 -->
		<div class="content">
			<div class="content-table">
				<table id="question_2">
					<thead>
						<tr>
							<th style="vertical-align: top; text-align: left;">B.</th>
							<th colspan="4" style="text-align: left;"></span>Quality of transaction of product/service</th>
							<th colspan="4" style="text-decoration: underline;">Number of <i>Responses</i></th>
							<th style="text-decoration: underline;">Total</th>
						</tr>
						<tr>
							<th rowspan="12"></th>
							<th>Rating</th>
							<th style="width: 15px;">&nbsp;</th>
							<th style="text-align: left;" colspan="2">Performace/<i>Experience</i></th>
							<th>Internal</th>
							<th>E.Rating</th>
							<th>External</th>
							<th>E.Rating</th>
							<th style="text-decoration: underline;">E.Rating</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>5</td>
							<td style="text-align: left;">Very Satisfied</td>
							<td>29</td>
							<td>145</td>
							<td>3</td>
							<td>15</td>
							<th>160</th>
						</tr>
						<tr>
							<td>4</td>
							<td style="text-align: left;">Satisfied</td>
							<td>2</td>
							<td>8</td>
							<td>0</td>
							<td>0</td>
							<th>8</th>
						</tr>
						<tr>
							<td>3</td>
							<td style="text-align: left;">Neutral</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>2</td>
							<td style="text-align: left;">Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>1</td>
							<td style="text-align: left;">Very Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td></td>
							<td>Total</td>
							<td>31</td>
							<td>153</td>
							<td>3</td>
							<td>15</td>
							<th>168</th>
						</tr>
						<tr>
							<td style="border: 1px solid; border-bottom: none;" rowspan="2">94%</td>
							<td style="text-align: left;">No Resonse</td>
							<td>0</td>
							<td></td>
							<td>0</td>
							<td></td>
							<th>0</th>
						</tr>
						<tr style="font-weight: bold;">
							<td style="text-align: left;">Average Rating</td>
							<td></td>
							<td>4.94</td>
							<td></td>
							<td>5.00</td>
							<td>4.94</td>
						</tr>
						<tr>
							<td style="border: 1px solid; border-top: none; display: block" rowspan="4">To attain VS<br>rating from 80%<br>of survery<br>respondents</td>
						</tr> -->
					</tbody>

				</table>
			</div>
			<div class="content-graph">
				<div class="graph">
					<canvas class="canvas" id="b-internal-responses" style="height: 90px; width: 200px;"></canvas>
					<canvas class="canvas" id="b-external-responses" style="height: 90px; width: 200px;"></canvas>
				</div>
				<div class="table" >
					<table style="width: 700px; margin: 0;">
						<tbody style="display: flex; ">
							<tr style="margin-left: 30px;">
								<th style="padding-right: 100px;">Internal:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
							<tr style="margin-left: 80px;">
								<th style="padding-right: 100px;">External:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th colspan="6">Overall responsiveness to queries/concerns rating: Very Satisfied</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- C section			 -->
		<div class="content" style="page-break-before: always;">
			<div class="content-table">
				<table id="question_3">
					<thead>
						<tr>
							<th style="vertical-align: top; text-align: left;">C.</th>
							<th colspan="4" style="text-align: left;"></span>Accessibility of products/services</th>
							<th colspan="4" style="text-decoration: underline;">Number of <i>Responses</i></th>
							<th style="text-decoration: underline;">Total</th>
						</tr>
						<tr>
							<th rowspan="12"></th>
							<th>Rating</th>
							<th style="width: 15px;">&nbsp;</th>
							<th style="text-align: left;" colspan="2" >Performace/<i>Experience</i></th>
							<th>Internal</th>
							<th>E.Rating</th>
							<th>External</th>
							<th>E.Rating</th>
							<th style="text-decoration: underline;">E.Rating</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>5</td>
							<td style="text-align: left;">Very Satisfied</td>
							<td>29</td>
							<td>145</td>
							<td>3</td>
							<td>15</td>
							<th>160</th>
						</tr>
						<tr>
							<td>4</td>
							<td style="text-align: left;">Satisfied</td>
							<td>2</td>
							<td>8</td>
							<td>0</td>
							<td>0</td>
							<th>8</th>
						</tr>
						<tr>
							<td>3</td>
							<td style="text-align: left;">Neutral</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>2</td>
							<td style="text-align: left;">Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>1</td>
							<td style="text-align: left;">Very Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td></td>
							<td>Total</td>
							<td>31</td>
							<td>153</td>
							<td>3</td>
							<td>15</td>
							<th>168</th>
						</tr>
						<tr>
							<td style="border: 1px solid; border-bottom: none;" rowspan="2">94%</td>
							<td style="text-align: left;">No Resonse</td>
							<td>0</td>
							<td></td>
							<td>0</td>
							<td></td>
							<th>0</th>
						</tr>
						<tr style="font-weight: bold;">
							<td style="text-align: left;">Average Rating</td>
							<td></td>
							<td>4.94</td>
							<td></td>
							<td>5.00</td>
							<td>4.94</td>
						</tr>
						<tr>
							<td style="border: 1px solid; border-top: none; display: block" rowspan="4">To attain VS<br>rating from 80%<br>of survery<br>respondents</td>
						</tr> -->
					</tbody>

				</table>
			</div>
			<div class="content-graph">
				<div class="graph">
					<canvas class="canvas" id="c-internal-responses" style="height: 90px; width: 200px;"></canvas>
					<canvas class="canvas" id="c-external-responses" style="height: 90px; width: 200px;"></canvas>
				</div>
				<div class="table" >
					<table style="width: 700px; margin: 0;">
						<tbody style="display: flex; ">
							<tr style="margin-left: 30px;">
								<th style="padding-right: 100px;">Internal:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
							<tr style="margin-left: 80px;">
								<th style="padding-right: 100px;">External:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th colspan="6">Overall responsiveness to queries/concerns rating: Very Satisfied</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- D section			 -->
		<div class="content">
			<div class="content-table">
				<table id="question_4">
					<thead>
						<tr>
							<th style="vertical-align: top; text-align: left;">D.</th>
							<th colspan="4" style="text-align: left;">Clarity of processes</th>
							<th colspan="4" style="text-decoration: underline;">Number of <i>Responses</i></th>
							<th style="text-decoration: underline;">Total</th>
						</tr>
						<tr>
						<th rowspan="12"></th>
							<th>Rating</th>
							<th style="width: 15px;">&nbsp;</th>
							<th style="text-align: left;" colspan="2">Performace/<i>Experience</i></th>
							<th>Internal</th>
							<th>E.Rating</th>
							<th>External</th>
							<th>E.Rating</th>
							<th style="text-decoration: underline;">E.Rating</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>5</td>
							<td style="text-align: left;">Very Satisfied</td>
							<td>27</td>
							<td>135</td>
							<td>3</td>
							<td>15</td>
							<th>150</th>
						</tr>
						<tr>
							<td>4</td>
							<td style="text-align: left;">Satisfied</td>
							<td>4</td>
							<td>16</td>
							<td>0</td>
							<td>0</td>
							<th>16</th>
						</tr>
						<tr>
							<td>3</td>
							<td style="text-align: left;">Neutral</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>2</td>
							<td style="text-align: left;">Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>1</td>
							<td style="text-align: left;">Very Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td></td>
							<td>Total</td>
							<td>31</td>
							<td>151</td>
							<td>3</td>
							<td>15</td>
							<th>166</th>
						</tr>
						<tr>
							<td style="border: 1px solid; border-bottom: none;" rowspan="2">88%</td>
							<td style="text-align: left;">No Resonse</td>
							<td>0</td>
							<td></td>
							<td>0</td>
							<td></td>
							<th>0</th>
						</tr>
						<tr style="font-weight: bold;">
							<td style="text-align: left;">Average Rating</td>
							<td></td>
							<td>4.87</td>
							<td></td>
							<td>5.00</td>
							<td>4.88</td>
						</tr>
						<tr>
							<td style="border: 1px solid; border-top: none; display: block" rowspan="4">To attain VS<br>rating from 80%<br>of survery<br>respondents</td>
						</tr> -->
					</tbody>

				</table>
			</div>
			<div class="content-graph">
				<div class="graph">
					<canvas class="canvas" id="d-internal-responses" style="height: 90px; width: 200px;"></canvas>
					<canvas class="canvas" id="d-external-responses" style="height: 90px; width: 200px;"></canvas>
				</div>
				<div class="table" >
					<table style="width: 700px; margin: 0;">
						<tbody style="display: flex; ">
							<tr style="margin-left: 30px;">
								<th style="padding-right: 100px;">Internal:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
							<tr style="margin-left: 80px;">
								<th style="padding-right: 100px;">External:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th colspan="6">Overall responsiveness to queries/concerns rating: Very Satisfied</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- E section			 -->
		<div class="content" style="page-break-before: always;">
			<div class="content-table">
				<table id="question_5">
					<thead>
						<tr>
							<th style="vertical-align: top; text-align: left;">E.</th>
							<th colspan="4" style="text-align: left;">Cost of product/services</th>
							<th colspan="4" style="text-decoration: underline;">Number of <i>Responses</i></th>
							<th style="text-decoration: underline;">Total</th>
						</tr>
						<tr>
							<th rowspan="12"></th>
							<th>Rating</th>
							<th style="width: 15px;" >&nbsp;</th>
							<th style="text-align: left;" colspan="2">Performace/<i>Experience</i></th>
							<th>Internal</th>
							<th>E.Rating</th>
							<th>External</th>
							<th>E.Rating</th>
							<th style="text-decoration: underline;">E.Rating</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>5</td>
							<td style="text-align: left;">Very Satisfied</td>
							<td>25</td>
							<td>125</td>
							<td>3</td>
							<td>15</td>
							<th>140</th>
						</tr>
						<tr>
							<td>4</td>
							<td style="text-align: left;">Satisfied</td>
							<td>2</td>
							<td>8</td>
							<td>0</td>
							<td>0</td>
							<th>8</th>
						</tr>
						<tr>
							<td>3</td>
							<td style="text-align: left;">Neutral</td>
							<td>9</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>9</th>
						</tr>
						<tr>
							<td>2</td>
							<td style="text-align: left;">Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>1</td>
							<td style="text-align: left;">Very Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td></td>
							<td>Total</td>
							<td>30</td>
							<td>142</td>
							<td>3</td>
							<td>15</td>
							<th>157</th>
						</tr>
						<tr>
							<td style="border: 1px solid; border-bottom: none;" rowspan="2">85%</td>
							<td style="text-align: left;">No Resonse</td>
							<td>0</td>
							<td></td>
							<td>0</td>
							<td></td>
							<th>0</th>
						</tr>
						<tr style="font-weight: bold;">
							<td style="text-align: left;">Average Rating</td>
							<td></td>
							<td>4.973</td>
							<td></td>
							<td>5.00</td>
							<td>4.76</td>
						</tr>
						<tr>
							<td style="border: 1px solid; border-top: none; display: block" rowspan="4">To attain VS<br>rating from 80%<br>of survery<br>respondents</td>
						</tr> -->
					</tbody>

				</table>
			</div>
			<div class="content-graph">
				<div class="graph">
					<canvas class="canvas" id="e-internal-responses" style="height: 90px; width: 200px;"></canvas>
					<canvas class="canvas" id="e-external-responses" style="height: 90px; width: 200px;"></canvas>
				</div>
				<div class="table" >
					<table style="width: 700px; margin: 0;">
						<tbody style="display: flex; ">
							<tr style="margin-left: 30px;">
								<th style="padding-right: 100px;">Internal:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
							<tr style="margin-left: 80px;">
								<th style="padding-right: 100px;">External:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th colspan="6">Overall responsiveness to queries/concerns rating: Very Satisfied</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- F section			 -->
		<div class="content">
			<div class="content-table">
				<table id="question_6">
						<thead>
						<tr>
							<th style="vertical-align: top; text-align: left;">F.</th>
							<th colspan="4" style="text-align: left;">Fairness and Trustworthiness on the delivery of transactions</th>
							<th colspan="4" style="text-decoration: underline;">Number of <i>Responses</i></th>
							<th style="white-space: nowrap; text-decoration: underline; ">Total</th>
						</tr>
						<tr>
						<th rowspan="12"></th>
							<th>Rating</th>
							<th style="width: 15px;" >&nbsp;</th>
							<th style="text-align: left;" colspan="2">Performace/<i>Experience</i></th>
							<th>Internal</th>
							<th>E.Rating</th>
							<th>External</th>
							<th>E.Rating</th>
							<th style="text-decoration: underline;">E.Rating</th>
						</tr>
						</thead>
					<tbody>
						<!-- <tr>
							<td>5</td>
							<th></th>
							<td style="text-align: left;">Very Satisfied</td>
							<td>29</td>
							<td>145</td>
							<td>3</td>
							<td>15</td>
							<th>160</th>
						</tr>
						<tr>
							<td>4</td>
							<th></th>
							<td style="text-align: left;">Satisfied</td>
							<td>1</td>
							<td>4</td>
							<td>0</td>
							<td>0</td>
							<th>4</th>
						</tr>
						<tr>
							<td>3</td>
							<th></th>
							<td style="text-align: left;">Neutral</td>
							<td>0</td>
							<td>145</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>2</td>
							<th></th>
							<td style="text-align: left;">Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>1</td>
							<th></th>
							<td style="text-align: left;">Very Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td></td>
							<th></th>
							<td>Total</td>
							<td>30</td>
							<td>149</td>
							<td>3</td>
							<td>15</td>
							<th>164</th>
						</tr>
						<tr>
							<td style="border: 1px solid; border-bottom: none;" rowspan="2">97%</td>
							<th></th>
							<td style="text-align: left;">No Resonse</td>
							<td>0</td>
							<td></td>
							<td>0</td>
							<td></td>
							<th>0</th>
						</tr>
						<tr style="font-weight: bold;">
							<th></th>
							<td style="text-align: left;">Average Rating</td>
							<td></td>
							<td>4.97</td>
							<td></td>
							<td>5.00</td>
							<td>4.97</td>
						</tr>
						<tr>
							<td style="border: 1px solid; border-top: none; display: block" rowspan="4">To attain VS<br>rating from 80%<br>of survery<br>respondents</td>
						</tr> -->
					</tbody>

				</table>
			</div>
			<div class="content-graph">
				<div class="graph">
					<canvas class="canvas" id="f-internal-responses" style="height: 90px; width: 200px;"></canvas>
					<canvas class="canvas" id="f-external-responses" style="height: 90px; width: 200px;"></canvas>
				</div>
				<div class="table" >
					<table style="width: 700px; margin: 0;">
						<tbody style="display: flex; ">
							<tr style="margin-left: 30px;">
								<th style="padding-right: 100px;">Internal:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
							<tr style="margin-left: 80px;">
								<th style="padding-right: 100px;">External:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th colspan="6">Overall responsiveness to queries/concerns rating: Very Satisfied</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- G section			 -->
		<div class="content"  style="page-break-before: always;">
			<div class="content-table">
				<table id="question_7">
					<thead>
						<tr>
							<th  style="vertical-align: top; text-align: left;">G.</th>
							<th colspan="4" style="text-align: left;">Knowledge or capability in delivering product/service</th>
							<th colspan="4" style="text-decoration: underline;">Number of <i>Responses</i></th>
							<th style="white-space: nowrap; text-decoration: underline;">Total</th>
						</tr>
						<tr>
							<th rowspan="12"></th>
							<th>Rating</th>
							<th style="width: 15px;" >&nbsp;</th>
							<th style="text-align: left;" colspan="2">Performace/<i>Experience</i></th>
							<th>Internal</th>
							<th>E.Rating</th>
							<th>External</th>
							<th>E.Rating</th>
							<th style="text-decoration: underline;">E.Rating</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>5</td>
							<th></th>
							<td style="text-align: left;">Very Satisfied</td>
							<td>29</td>
							<td>145</td>
							<td>3</td>
							<td>15</td>
							<th>160</th>
						</tr>
						<tr>
							<td>4</td>
							<th></th>
							<td style="text-align: left;">Satisfied</td>
							<td>2</td>
							<td>8</td>
							<td>0</td>
							<td>10</td>
							<th>8</th>
						</tr>
						<tr>
							<td>3</td>
							<th></th>
							<td style="text-align: left;">Neutral</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>2</td>
							<th></th>
							<td style="text-align: left;">Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>1</td>
							<th></th>
							<td style="text-align: left;">Very Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td></td>
							<th></th>
							<td>Total</td>
							<td>31</td>
							<td>153</td>
							<td>3</td>
							<td>15</td>
							<th>168</th>
						</tr>
						<tr>
							<td style="border: 1px solid; border-bottom: none;" rowspan="2">94%</td>
							<th></th>
							<td style="text-align: left;">No Resonse</td>
							<td>0</td>
							<td></td>
							<td>0</td>
							<td></td>
							<th>0</th>
						</tr>
						<tr style="font-weight: bold;">
							<th></th>
							<td style="text-align: left;">Average Rating</td>
							<td></td>
							<td>4.94</td>
							<td></td>
							<td>5.00</td>
							<td>4.94</td>
						</tr>
						<tr>
							<td style="border: 1px solid; border-top: none; display: block" rowspan="4">To attain VS<br>rating from 80%<br>of survery<br>respondents</td>
						</tr> -->
					</tbody>

				</table>
			</div>
			<div class="content-graph">
				<div class="graph">
					<canvas class="canvas" id="g-internal-responses" style="height: 90px; width: 200px;"></canvas>
					<canvas class="canvas" id="g-external-responses" style="height: 90px; width: 200px;"></canvas>
				</div>
				<div class="table" >
					<table style="width: 700px; margin: 0;">
						<tbody style="display: flex; ">
							<tr style="margin-left: 30px;">
								<th style="padding-right: 100px;">Internal:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
							<tr style="margin-left: 80px;">
								<th style="padding-right: 100px;">External:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th colspan="6">Overall responsiveness to queries/concerns rating: Very Satisfied</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- H section			 -->
		<div class="content" >
			<div class="content-table">
				<table id="question_8">
					<thead>
						<tr>
							<th  style="vertical-align: top; text-align: left;">H.</th>
							<th colspan="4" style="text-align: left;">Timeliness on the completion of transaction</th>
							<th colspan="4" style="text-decoration: underline;">Number of <i>Responses</i></th>
							<th style="text-decoration: underline;">Total</th>
						</tr>
						<tr>
							<th rowspan="12"></th>
							<th>Rating</th>
							<th style="width: 15px;" >&nbsp;</th>
							<th style="text-align: left;" colspan="2">Performace/<i>Experience</i></th>
							<th>Internal</th>
							<th>E.Rating</th>
							<th>External</th>
							<th>E.Rating</th>
							<th style="text-decoration: underline;">E.Rating</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>5</td>
							<td style="text-align: left;">Very Satisfied</td>
							<td>29</td>
							<td>145</td>
							<td>3</td>
							<td>15</td>
							<th>160</th>
						</tr>
						<tr>
							<td>4</td>
							<td style="text-align: left;">Satisfied</td>
							<td>2</td>
							<td>8</td>
							<td>0</td>
							<td>0</td>
							<th>8</th>
						</tr>
						<tr>
							<td>3</td>
							<td style="text-align: left;">Neutral</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>2</td>
							<td style="text-align: left;">Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>1</td>
							<td style="text-align: left;">Very Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td></td>
							<td>Total</td>
							<td>31</td>
							<td>153</td>
							<td>3</td>
							<td>15</td>
							<th>168</th>
						</tr>
						<tr>
							<td style="border: 1px solid; border-bottom: none;" rowspan="2">94%</td>
							<td style="text-align: left;">No Resonse</td>
							<td>0</td>
							<td></td>
							<td>0</td>
							<td></td>
							<th>0</th>
						</tr>
						<tr style="font-weight: bold;">
							<td style="text-align: left;">Average Rating</td>
							<td></td>
							<td>4.94</td>
							<td></td>
							<td>5.00</td>
							<td>4.94</td>
						</tr>
						<tr>
							<td style="border: 1px solid; border-top: none; display: block" rowspan="4">To attain VS<br>rating from 80%<br>of survery<br>respondents</td>
						</tr> -->
					</tbody>

				</table>
			</div>
			<div class="content-graph">
				<div class="graph">
					<canvas class="canvas" id="h-internal-responses" style="height: 90px; width: 200px;"></canvas>
					<canvas class="canvas" id="h-external-responses" style="height: 90px; width: 200px;"></canvas>
				</div>
				<div class="table" >
					<table style="width: 700px; margin: 0;">
						<tbody style="display: flex; ">
							<tr style="margin-left: 30px;">
								<th style="padding-right: 100px;">Internal:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
							<tr style="margin-left: 80px;">
								<th style="padding-right: 100px;">External:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th colspan="6">Overall responsiveness to queries/concerns rating: Very Satisfied</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="last-content" style="page-break-inside: avoid;">
			<!-- I section			 -->
		<div class="content" >
			<div class="content-table">
				<table id="question_9">
					<thead>
						<tr>
							<th style="vertical-align: top; text-align: left;">I.</th>
							<th colspan="4" style="text-align: left;">Overall rating</th>
							<th colspan="4" style="text-decoration: underline;">Number of <i>Responses</i></th>
							<th style="text-decoration: underline;">Total</th>
						</tr>
						<tr>
							<th rowspan="12"></th>
							<th>Rating</th>
							<th style="width: 15px;">&nbsp;</th>
							<th style="text-align: left;" colspan="2">Performace/<i>Experience</i></th>
							<th>Internal</th>
							<th>E.Rating</th>
							<th>External</th>
							<th>E.Rating</th>
							<th style="text-decoration: underline;">E.Rating</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>5</td>
							<th></th>
							<td style="text-align: left;">Very Satisfied</td>
							<td>30</td>
							<td>150</td>
							<td>3</td>
							<td>15</td>
							<th>165</th>
						</tr>
						<tr>
							<td>4</td>
							<th></th>
							<td style="text-align: left;">Satisfied</td>
							<td>1</td>
							<td>4</td>
							<td>30</td>
							<td>0</td>
							<th>4</th>
						</tr>
						<tr>
							<td>3</td>
							<th></th>
							<td style="text-align: left;">Neutral</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>2</td>
							<th></th>
							<td style="text-align: left;">Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td>1</td>
							<th></th>
							<td style="text-align: left;">Very Dissatisfied</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<th>0</th>
						</tr>
						<tr>
							<td></td>
							<th></th>
							<td>Total</td>
							<td>31</td>
							<td>154</td>
							<td>3</td>
							<td>15</td>
							<th>169</th>
						</tr>
						<tr>
							<td style="border: 1px solid; border-bottom: none;" rowspan="2">97%</td>
							<th></th>
							<td style="text-align: left;">No Resonse</td>
							<td>0</td>
							<td></td>
							<td>0</td>
							<td></td>
							<th>0</th>
						</tr>
						<tr style="font-weight: bold;">
							<th></th>
							<td style="text-align: left;">Average Rating</td>
							<td></td>
							<td>4.97</td>
							<td></td>
							<td>5.00</td>
							<td>4.97</td>
						</tr>
						<tr>
							<td style="border: 1px solid; border-top: none; display: block" rowspan="4">To attain VS<br>rating from 80% <br> of survery<br>respondents</td>
						</tr> -->
					</tbody>
					<tbody>
						<tr>
							<th></th>
							<td></td>
							<td></td>
							<td></td>
							<th colspan="2" style="white-space: nowrap;">Overall Average Rating:</th>
							<td></td>
							<th style="border: 1px solid black;">4.94</th>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="content-graph">
				<div class="graph">
					<canvas class="canvas" id="i-internal-responses" style="height: 90px; width: 200px;"></canvas>
					<canvas class="canvas" id="i-external-responses" style="height: 90px; width: 200px;"></canvas>
				</div>
				<div class="table" >
					<table style="width: 700px; margin: 0;">
						<tbody style="display: flex; ">
							<tr style="margin-left: 30px;">
								<th style="padding-right: 100px;">Internal:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
							<tr style="margin-left: 80px;">
								<th style="padding-right: 100px;">External:</th>
								<td style="font-weight: bold;" colspan="2">Very Satisfied</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<th colspan="6">Overall responsiveness to queries/concerns rating: Very Satisfied</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- Last Part -->
		<div class="content" style="margin-top: 5px;">
			<div class="content-table" >
				<div style="display: flex;">
					<table style="text-align: center; margin-bottom: 20px; width: 6.5%; margin-left: 10px; ">
						<tbody>
							<tr>
								<td style="border-right:1px solid; border-left:1px solid; border-top: 1px solid;">&nbsp;</td>
							</tr>
							<tr>
								<td style="border-right:1px solid; border-left:1px solid; text-align: center;  font-weight: bold;">93%</td>
							</tr>
							<tr>
								<td style=" border-right:1px solid; border-left:1px solid;">&nbsp;</td>
							</tr>
							<tr>
								<td style="border: 1px solid; border-top: 1px solid black; display: block; text-decoration: underline; " rowspan="2">To attain VS<br>rating from 80%<br>of survery<br>respondents</td>
							</tr>
						</tbody>
					</table>
					<table style="text-align: center; margin-bottom: 72px; width: 60%; border: 1px solid; margin-left: 15px;">
						<tbody>
							<tr>
								<td colspan="7"style="text-align: center; font-weight: bold; font-size: 14px; border-right: 1px solid;">AVERAGE PERFORMANCE FOR THIS
									QUARTER:</td>
								<td colspan="4" style="text-align: center; font-size: 14px; font-weight: bold; ">Very Satisfied</td>
							</tr>
						</tbody>
					</table>
				</div>
				<table >
					<thead>
						<tr>
							<th colspan="3" style="text-align: left;">Service Requested/Purposes of Visit:</th>
						</tr>
					</thead>
					<table style="display: flex; text-align: left; padding-left: 10px;">
						<tbody style="padding-right: 250px;">
							<tr>
								<td>1</td>
								<td>Orientation on ERMS</td>
							</tr>
							<tr>
								<td>2</td>
								<td>GovMall password reset</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Correction of DTR entry</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Inquiry/request for assistance/follow-up on related concerns</td>
							</tr>
							<tr>
								<td></td>
								<td style="font-style: italic;">*Add rows and extend page if necessary.</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td>5</td>
								<td>Printer installation</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Assistance troubleshooting</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Website postings</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Biometrics enrollment/registration</td>
							</tr>
						</tbody>
					</table>
				</table>
				<table style="text-align: left; margin-top: 10px;">
					<thead>
						<tr>
							<th colspan="2">Summary of Comments and Suggestions:</th>
						</tr>
					</thead>
					<tbody>
						<tr >
							<td style="padding-left: 10px;">1</td>
							<td>"Good Job! keep up the good work. thanks again collegues!!!" - Esmeralda Demafelix,
								OUSECRO</td>
						</tr>
						<tr>
							<td style="padding-left: 10px;">2</td>
							<td>"The response was fast and so was the assistance provided" - John, DOST-CO</td>
						</tr>
						<tr>
							<td style="padding-left: 10px;">3</td>
							<td>"Very accommodating" - Mary Jane Barro, FMS-BD</td>

						</tr>
						<tr>
							<td style="padding-left: 10px;">4</td>
							<td>"ITD personnel have provided excellent IT services to PDPD for hte succesful conduct of
								ManCom Meeting. Very competent ITD Staff" - Diane Marie C. Bernardo, PDPD</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="font-style: italic;">*Add rows and extend page if necessary.</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
					</tbody>
					<tr>
						<td colspan="2">Prepared by:</td>
						<td colspan="2">Noted by:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="2" colspan="2">
							<div style="margin-left: 100px; margin-right: 100px;">
								<span >JAMEL R. LESIGUEZ</span> <br>
								<span  class="extended-overline">CCSS Focal Person</span>
							</div>
						</td>
					</tr>
					<tr>
						<td rowspan="2" colspan="2" style="width: 30%;">
							<div style="margin-left: 100px; margin-right: 100px;">
								<span>ROGELION N. ROASA</span> <br>
								<span class="extended-overline">Head of Office/Unit</span>
							</div>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="2" colspan="2">
							<div style="margin-left: 50px; margin-right: 100px;">
								<span style="white-space: nowrap;">Received by:</span>_____________________<span style="margin-left: 350px;">Date:_____________________</span> <br>
								<span style="margin-left: 85px;">ISO Secretariat</span>
							</div>
						</td>
					</tr>
					<tr>
						<td rowspan="2" colspan="2">&nbsp;</td>
					</tr>
					<!-- <tr>
						<td>&nbsp;</td>
					</tr> -->
					<tr>
						<td rowspan="2" colspan="2" style="font-weight: bold; font-size: 10px;">*Note: This
							QUARTERYLY REPORT is submitted to ISO Secretariat on or before the middle (15th) of the
							following Month (April, July, October, and January).</td>
					</tr>
				</table>
			</div>
		</div>
		</div>
	</div>
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>

<script>

//charts

var feedbackData = {
    1: { happy: 10, good: 5, ok: 3, sad: 1, angry: 0 },
    2: { happy: 8, good: 6, ok: 4, sad: 2, angry: 1 },
    3: { happy: 12, good: 7, ok: 5, sad: 0, angry: 0 },
    4: { happy: 9, good: 5, ok: 3, sad: 2, angry: 1 },
    5: { happy: 11, good: 6, ok: 2, sad: 1, angry: 0 },
    6: { happy: 7, good: 4, ok: 3, sad: 2, angry: 1 },
    7: { happy: 13, good: 8, ok: 5, sad: 1, angry: 0 },
    8: { happy: 10, good: 7, ok: 4, sad: 2, angry: 1 },
    9: { happy: 14, good: 9, ok: 6, sad: 0, angry: 0 }
};

var allResponses = [];

for (var i = 1; i <= 9; i++) {
    var questionResponses = {
        question: i,
        responses: [
            feedbackData[i]['happy'],
            feedbackData[i]['good'],
            feedbackData[i]['ok'],
            feedbackData[i]['sad'],
            feedbackData[i]['angry']
        ]
    };

    allResponses.push(questionResponses);
}



// console.log(allResponses[0].responses[0]);
console.log(allResponses);

var chartsID = [
    { id: "a-internal-responses", title: "Overall Rating: Internal Responses", responses: allResponses[0].responses, color: "orange", max: 160, skips: 20  },
    { id: "a-external-responses", title: "Overall Rating: External Responses", responses:[15, 0, 0, 0, 0,], color: "orange", max: 16, skips: 2  },

	{ id: "b-internal-responses", title: "Overall Rating: Internal Responses", responses: allResponses[1].responses, color: "lightblue", max: 160, skips: 20  },
	{ id: "b-external-responses", title: "Overall Rating: External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

	{ id: "c-internal-responses", title: "Overall Rating: Internal Responses", responses: allResponses[2].responses, color: "lightblue", max: 160, skips: 20  },
	{ id: "c-external-responses", title: "Overall Rating: External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

	{ id: "d-internal-responses", title: "Overall Rating: Internal Responses", responses: allResponses[3].responses, color: "lightblue", max: 160, skips: 20  },
	{ id: "d-external-responses", title: "Overall Rating: External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

	{ id: "e-internal-responses", title: "Overall Rating: Internal Responses", responses: allResponses[4].responses, color: "lightblue", max: 160, skips: 20  },
	{ id: "e-external-responses", title: "Overall Rating: External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

	{ id: "f-internal-responses", title: "Overall Rating: Internal Responses", responses: allResponses[5].responses, color: "lightblue", max: 160, skips: 20  },
	{ id: "f-external-responses", title: "Overall Rating: External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

	{ id: "g-internal-responses", title: "Overall Rating: Internal Responses", responses: allResponses[6].responses, color: "lightblue", max: 160, skips: 20  },
	{ id: "g-external-responses", title: "Overall Rating: External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

	{ id: "h-internal-responses", title: "Overall Rating: Internal Responses", responses: allResponses[7].responses, color: "lightblue", max: 160, skips: 20  },
	{ id: "h-external-responses", title: "Overall Rating: External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

	{ id: "i-internal-responses", title: "Overall Rating: Internal Responses", responses: allResponses[8].responses, color: "lightblue", max: 160, skips: 20  },
	{ id: "i-external-responses", title: "Overall Rating: External Responses", responses:[15, 0, 0, 0, 0,], color: "lightblue", max: 16, skips: 2  },

];

var yvalues = [
	"Very Satisfied",
	"Satisfied",
	"Neutral",
	"Dissatisfied",
	"Very Dissatisfied",
];


for (var i = 0; i < chartsID.length; i++) {
    new Chart(chartsID[i].id, {
        type: "horizontalBar",
		data: {
		labels: yvalues,
		datasets: [
			{
				backgroundColor: chartsID[i].color,
				data: chartsID[i].responses,
			},
		],
		},
		options: {
			responsive: true,
			layout: {
			padding: {
				left: 65
				}
			},
			scales: {
				xAxes: [{
					position: "top",
					ticks: {
						fontSize: 8,
						beginAtZero: true,
						stepSize: chartsID[i].skips,
						max: chartsID[i].max
					},
				}],
				yAxes: [{
					ticks: {
						fontSize: 8,
						mirror: true,
    					padding: 65,
					},
					// gridLines: {
					// 	display: false
					// },
				}],
			},
			title: {
				display: true,
				text: [
					chartsID[i].title
				],
				fontSize: 10,
			},
			animation: {
            onComplete: function () {
                var chartInstance = this.chart;
                var ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'left';
                ctx.textBaseline = 'middle';
				ctx.font = 'bold 8px Arial';

                this.data.datasets.forEach(function (dataset) {
                    for (var i = 0; i < dataset.data.length; i++) {
                        var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                        var value = dataset.data[i];

						ctx.fillStyle = 'black';
						ctx.fillText(value, model.x +5, model.y);
                    }
                });

            }
        },
			legend: {
					display: false
				}
		},
	});
}

//table
var totalResponse = [];


for (var totalsCounter = 0 ; totalsCounter < allResponses.length; totalsCounter++ ){
	var total = 0;
	for (var i = 0; i < allResponses[totalsCounter].responses.length; i++){
		var responseValue = parseFloat(allResponses[totalsCounter].responses[i]);
		if (!isNaN(responseValue)) {
			total += responseValue;
		}else{
			console.log("not");
		}
	}
	totalResponse.push(total);
	console.log('Total for question ' + (totalsCounter + 1) + ': ' + total);
}

console.log(totalResponse);

for (var counter = 1; counter <= 9; counter++){
	var ratingName = ["Very Satisfied", "Satisfied", "Neutral", "Dissatisfied", "Very dissatisfied"];
	var ratingNumber = [5, 4, 3, 2, 1];


	// console.log(allResponses[0].responses[0]);
	var data = [
		[allResponses[counter-1].responses[0], 150, 3, 15, 165],
		[allResponses[counter-1].responses[1], 4, 0, 0, 4],
		[allResponses[counter-1].responses[2], 0, 0, 0, 0],
		[allResponses[counter-1].responses[3], 0, 0, 0, 0],
		[allResponses[counter-1].responses[4], 0, 0, 0, 0]
	];

	// console.log(data);
	var questionName = "question_" + counter;

	// console.log(questionName);
	var tableBody = document.getElementById(questionName).getElementsByTagName('tbody')[0];

	for (var i = 0; i < ratingName.length; i++) {
		var row = tableBody.insertRow();



		var emptyCell = row.insertCell();
		var numberCell = row.insertCell();
		numberCell.textContent = ratingNumber[i];
		var emptyCell1 = row.insertCell();
		// emptyCell.insertRow();

		var nameCell = row.insertCell();
		nameCell.style.textAlign = "left";
		nameCell.colSpan = 2;
		nameCell.textContent = ratingName[i];

		// emptyCell.insertCell();

		for (var j = 0; j < data[i].length; j++) {
			var dataCell = row.insertCell();

			dataCell.textContent = data[i][j];

			if (j === data[i].length - 1) {
				dataCell.style.fontWeight = "bold";
			}
		}
	}

	//total



	var totalValues = [totalResponse[counter-1], 154, 3, 15, 169];
	var totalRow = tableBody.insertRow();

	totalRow.insertCell();
	totalRow.insertCell();
	totalRow.insertCell();
	// totalRow.insertCell();




	var totalCell = totalRow.insertCell();


	totalCell.colSpan = 2;
	totalCell.style.fontStyle = "Italic";
	totalCell.style.fontWeight = "bold";
	totalCell.textContent = "Total";

	// Insert data values in the same row
	for (var j = 0; j < totalValues.length; j++) {
		var dataCell = totalRow.insertCell();
		dataCell.style.borderTop = "1px solid black";
		dataCell.style.fontWeight = "bold";
		dataCell.textContent = totalValues[j];

	}

	//no response

	var noResponseValues = [31, "", 154, "", 3];


	// var percentRow = tableBody.insertRow();
	var noResponseRow = tableBody.insertRow();

	// noResponseRow.insertCell();
	// percentRow.insertCell();
	noResponseRow.insertCell();


	var percentCell = noResponseRow.insertCell();

	percentCell.style.border = "1px solid black";
	percentCell.style.borderBottom = "none";
	percentCell.style.textAlign = "center"
	percentCell.style.fontWeight = "bold"
	percentCell.style.width = "15%";
	percentCell.rowSpan = 2;
	// percentCell.style.verticalAlign = "top";
	// percentCell.style.fontSize = "20px";
	percentCell.textContent = "97%";

	noResponseRow.insertCell();
	var noResponseCell = noResponseRow.insertCell();

	noResponseCell.colSpan =  2;
	noResponseCell.style.textAlign = "left";
	noResponseCell.textContent = "No Response";


 // Concatenate the values

	// Insert data values in the same row
	for (var j = 0; j < noResponseValues.length; j++) {
		var dataCell = noResponseRow.insertCell();
		dataCell.textContent = noResponseValues[j];


		if (j === noResponseValues.length - 1) {
			dataCell.style.fontWeight = "bold";
		}

		if (j === noResponseValues.length - 5 || j === noResponseValues.length - 3  ) {
			dataCell.style.borderBottom = "1px solid black";
		}
	}

	//average rating

	var averageValues = ["", 31, "", 154.01, 3];
	var averageRow = tableBody.insertRow();

	averageRow.insertCell();
	averageRow.insertCell();
	// averageRow.insertCell();


	// var averageCell = averageRow.insertCell();
	// averageCell.style.borderLeft = "1px solid black";

	var averageCell = averageRow.insertCell();

	averageCell.colSpan = 2;
	averageCell.style.textAlign = "left";
	averageCell.style.fontWeight = "bold";
	averageCell.textContent = "Average Rating";

	// Insert data values in the same row
	for (var j = 0; j < averageValues.length; j++) {
		var dataCell = averageRow.insertCell();
		var formattedValue = "";
		if (averageValues[j] != ""){
			formattedValue = Number(averageValues[j]).toFixed(2);
		}

		dataCell.style.fontWeight = "bold";
		dataCell.textContent = formattedValue;
	}

	//last row


	var lastRow = tableBody.insertRow();
	var lastCell = lastRow.insertCell();
	var nextCell = lastRow.insertCell();

	lastCell.rowSpan = 4;
	lastCell.style.textAlign = "center";
	// lastCell.style.borderTop = "1px solid black";
	lastCell.innerHTML = "&nbsp;";


	nextCell.style.border = "1px solid black";
	nextCell.style.borderTop = "1px solid black";
	nextCell.style.whiteSpace = "nowrap";
	nextCell.style.textDecoration = "underline";
	nextCell.innerHTML = "To attain VS<br>rating from 80%<br>of survey<br>respondents";


}


</script>


</html>
