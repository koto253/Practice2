## For this activity you should create 3 files.
### HTML File (input.html):
Create one HTML file called **input.html** that contains 2 separate forms:
+ The first form should be sent to a file called **login.php** through the **POST method**. It should have 1 text field (representing an username), and 1 password field (representing a password). These fields should have proper labels that make them accessible. Also create a submit input.
+ The second form should be sent to a file called **calculate.php** through the **GET method**. It should have 1 text field representing the amount of seconds of a video. This field should have an appropriate label. The form should also have a submit input.

### PHP File (login.php): 
This file should take the information from the form, and place them into php variables. Display the values on the PHP variables.
+ Test the login form with a couple of values for username and password.
+ Test the login form with EMPTY values. 
    + **Question 1** What happens in PHP when the values of the form are empty?
    + **Question 2** Is the password protected in any way when it’s submitted to the PHP?
### PHP File (calculate.php)
This file should take the information from the form, and place it into a php variable. Use this variable to convert the amount of seconds, to HOURS, MINUTES and SECONDS. For example, **if the user enters 3782 then your program should display: 1 Hour, 3 minute and 2 seconds**.
