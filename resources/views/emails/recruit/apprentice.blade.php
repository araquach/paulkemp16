<h2>There is a new <strong>apprentice</strong> application for PK</h2>

<p>First Name: {{ $applicant->first_name }} {{ $applicant->second_name }}</p>
<p>Email Address: {{ $applicant->email }}</p>
<p>Mobile Number: {{ $applicant->mobile }}</p>
<p>Phone Number: {{ $applicant->phone }}</p>

{{ action('ApprenticeController@show', ['id' => $applicant->id]) }}