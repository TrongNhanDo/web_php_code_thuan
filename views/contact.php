<div class="contact">
	<h1 style="text-align:center">CONTACT US</h1> <hr style="width: 80%;margin:auto">
	<form action="/action_page.php" style="margin-top: 20px;">
		<label for="fname">First Name</label>
		<input type="text" id="fname" name="firstname" placeholder="Your name..">

		<label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name..">

		<label for="country">Country</label>
		<select id="country" name="country">
		<option value="australia">Australia</option>
		<option value="canada">Canada</option>
		<option value="usa">USA</option>
		</select>

		<label for="subject">Subject</label>
		<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

		<input type="submit" value="Submit">
	</form>
</div>

<style>
	.heading-contact{
		padding-left: 17px;
		width: 100%;
		height: 80px;
		line-height: 80px;
		background-color: pink;
		font-size: 28px;
		font-weight: bold;
		text-align: center;
	}
	input[type=text], select, textarea {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		margin-top: 6px;
		margin-bottom: 16px;
		resize: vertical;
	}

	input[type=submit] {
		background-color: #04AA6D;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
		background-color: #45a049;
	}

	.contact {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
	}
</style>