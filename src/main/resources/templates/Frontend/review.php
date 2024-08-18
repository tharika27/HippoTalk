
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Review Information</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="newUser.css">
    <body> 
    <div class="container"> 
    <form name="Patient Information"  action="reviewNewUser.php"method="post">
        <h1 class="form__title">Update Patient Information</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">

            <form action="#" th:action="@{/register}" method="post" th:object="${user}">
                <label>Please enter your first Name:</label>

            <input type="text" id="newFirstName" th:field="*{firstName}" name= "FirstName" class="form__input" autofocus placeholder="First Name">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">

            <label>Please enter your last Name:</label>
            <input type="text" id="newLastName" th:field="*{lastName}" name= "LastName" class="form__input" autofocus placeholder="Last Name">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">

            <label>Please enter your home phone number</label>
            <input type="text" id="newPhoneNum" th:field="*{phoneNum}"name= "PhoneNum" class="form__input" autofocus placeholder="Phone Number"> 
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">

            <label>Please enter your birthday</label>
            <input type="text" id="newDOB" name= "DOB" th:field="*{DOB}"class="form__input" autofocus placeholder="DOB: MM/DD/YYYY">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">

            <label>Please enter your street address</label>
            <input type="text" id="newAddress" th:field="*{address}" name= "Address" class="form__input" autofocus placeholder="Street Address">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">

            <label>Please enter your city</label>
            <input type="text" id="newCity" th:field="*{city}" name= "City" class="form__input" autofocus placeholder="City">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">

            <label>Please enter your zipcode</label>
            <input type="text" id="newZipCode" th:field="*{zipCode}" name= "ZipCode" class="form__input" autofocus placeholder="Zip Code"> 
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">

            <label>Please enter your state of current residence</label>
            <input type="text" id="newState" th:field="*{state}" name= "State" class="form__input" autofocus placeholder="State">
            <div class="form__input-error-message"></div>
        </div>

        <div class="form__input-group">

            <label>Please enter the country</label>
            <input type="text" id="newCountry" th:field="*{country}" name= "Country" class="form__input" autofocus placeholder="Country">
            <div class="form__input-error-message"></div>
        </div>
        
        <br>
        <button>Save and Continue</button>
       

    </form>   
    </div>
    <script src="newUser.js"></script>
<body>
    