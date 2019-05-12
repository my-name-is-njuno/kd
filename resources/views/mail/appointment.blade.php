<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	body {
	background-color: #f6f6ff;
	font-family: Calibri, Myriad;
	}

	#main {
		width: 780px;
		padding: 20px;
		margin: auto;
	}

	table.timecard {
		margin: auto;
		width: 600px;
		border-collapse: collapse;
		border: 1px solid #fff; /*for older IE*/
		border-style: hidden;
	}
</style>
<body>
	
	<p>New Appoitment </p>

	<p>
		<table class="timecard">
			<tr>
				<th width="30%">
					Name
				</th>

				<td>
					{{ $appt->name }}
				</td>
			</tr>


			<tr>
				<th width="30%">
					Location
				</th>

				<td>
					{{ $appt->location }}
				</td>
			</tr>


			<tr>
				<th width="30%">
					Email
				</th>

				<td>
					{{ $appt->email }}
				</td>
			</tr>


			<tr>
				<th width="30%">
					Phone Number
				</th>

				<td>
					{{ $appt->phone }}
				</td>
			</tr>

			<tr>
				<th width="30%">
					Message
				</th>

				<td>
					{{ $appt->message }}
				</td>
			</tr>
		</table>
	</p>




</body>
</html>