

<h1>
	Demo Table
</h1>

<table cellpadding="5" cellspacing="2" border="1" >
{% for content in contents %}
<tr>

<td style=" padding: 5px; ">
{{ content.firstname }}
</td>
<td style=" padding: 5px; ">
{{ content.middlename }}
</td>
<td style=" padding: 5px; ">
{{ content.lastname }}
</td>
<td>
	<p onclick="del('{{content.firstname}}')" >delete</p>
</td>
</tr>
{% endfor %}

</table>
<br>

<div class="row">
<form onsubmit="return insert()">
	<div class="col-md-3">
		<input type="text" id="fname" class="form-control" placeholder="Enter First name" required/>
	</div>
	<div class="col-md-3">
		<input type="text" id="mname" class="form-control" value='' placeholder="Enter Middle name" />
	</div>
	<div class="col-md-3">
		<input type="text" id="lname" class="form-control" placeholder="Enter Last name" required/>
	</div>
	<div class="col-md-3">
		<input type="submit" class="btn btn-success" value="Insert to the table" />
	</div>
</form>
</div>


<br>
<div class="row">
	<div class="col-md-12">
		{{msg}}
	</div>
</div>

{{ javascript_include('js/demo.js') }}
