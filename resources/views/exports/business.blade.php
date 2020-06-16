<table>
    <thead>
    <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Status</th>
        <th>Filing Type</th>
        <th>Address</th>
        <th>Address2</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Country</th>
        <th>Mail Address</th>
        <th>Mail Address2</th>
        <th>Mail City</th>
        <th>Mail State</th>
        <th>Mail Zip</th>
        <th>Mail Country</th>
        <th>Mail Date</th>
    </tr>
    </thead>
    <tbody>
	
	
    @foreach($datas as $list)
	<?php if(!empty($list)){?>
        <tr>
            <td>{{ $list['COR_NUMBER'] }}</td>
            <td>{{ $list['COR_NAME'] }}</td>
            <td>{{ $list['COR_STATUS'] }}</td>
            <td>{{ $list['COR_FILING_TYPE'] }}</td>
            <td>{{ $list['COR_PRINC_ADD_1'] }}</td>
            <td>{{ $list['COR_PRINC_ADD_2'] }}</td>
            <td>{{ $list['COR_PRINC_CITY'] }}</td>
            <td>{{ $list['COR_PRINC_STATE'] }}</td>
            <td>{{ $list['COR_PRINC_ZIP'] }}</td>
            <td>{{ $list['COR_PRINC_COUNTRY'] }}</td>
            <td>{{ $list['COR_MAIL_ADD_1'] }}</td>
            <td>{{ $list['COR_MAIL_ADD_2'] }}</td>
            <td>{{ $list['COR_MAIL_CITY'] }}</td>
            <td>{{ $list['COR_MAIL_STATE'] }}</td>
            <td>{{ $list['COR_MAIL_ZIP'] }}</td>
            <td>{{ $list['COR_MAIL_COUNTRY'] }}</td>
            <td>{{ $list['COR_FILE_DATE'] }}</td>
	<?php }?>
        </tr>
    @endforeach
    </tbody>
</table>