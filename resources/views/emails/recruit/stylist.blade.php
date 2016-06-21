<p>There is a new stylist application for PK</p>

<p>First Name: {{ $applicant->first_name }} {{ $applicant->second_name }}</p>
<p>Email Address: {{ $applicant->email }}</p>
<p>Mobile Number: {{ $applicant->mobile }}</p>
<p>Phone Number: {{ $applicant->phone }}</p>

{{ action('StylistController@show', ['id' => $applicant->id]) }}