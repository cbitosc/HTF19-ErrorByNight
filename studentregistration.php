
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Faculty Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="facultyregistrationdetails.php" method="post" class="register">
            <h1>Student Registration</h1>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>Email *
                    </label>
                    <input type="text" name="email"/>
                </p>
                <p>
                    <label>Password*
                    </label>
                    <input type="text" name="pwd1"/>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label>Name *
                    </label>
                    <input type="text" class="long" name="name"/>
                </p>
				<p>
                    <label>Roll no *
                    </label>
                    <input type="text" class="long" name="name"/>
                </p>
                <p>
                    <label>Phone *
                    </label>
                    <input type="text" maxlength="10" name="mob"/>
                </p>
				 <p>
                    <label>Branch *
                    </label>
                    <input type="text" maxlength="10" name="mob"/>
                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender </label>
                    <input type="text" name="gender"/>
                </p>
                <p>
                    <label>Birthdate 
                    </label><input type="text" name="date"/>
                   e.g 23/02/1976
                </p>
                <p>
                    <label>Nationality 
                    </label>
                    <input class="long" type="text" name="nationality" />
                </p>
            </fieldset>
			<fieldset>
			</br>
			</br>
			</br>
			</br>
            <button class="button" style="background-color:#4169E1">Register &raquo;</button>
			</fieldset>
        </form>
    </body>
</html>





