<h2>All Enquiries</h2> 


<table  style="width: 100%;background: #fff">
	<tr style="background: #ccc">
		<th style="padding: 10px;border: 1px solid #333;">Name</th>
		<th style="padding: 10px;border: 1px solid #333;">Property Id</th>
		<th style="padding: 10px;border: 1px solid #333;">Contact No.</th>
	</tr>

	<?php   foreach ($enquiries as $key => $enquiry) { ?>
	
		<tr style="padding: 7px;">
			<td style="padding: 10px;border: 1px solid #333;"><?= $enquiry->name; ?></td>
			<td style="padding: 10px;border: 1px solid #333;"><?= $enquiry->property->name; ?></td>
			<td style="padding: 10px;border: 1px solid #333;"><?= $enquiry->mobile_no; ?></td>
		</tr>

	<?php } ?>
</table>