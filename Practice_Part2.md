## PHP File (login.php):

Last class this file only had PLAIN text. As we observed, the password was not safe at all. Other security issues can happen if we do not control the user input, especially when we connect to the database later in the semester.

There are many functions that can ultimately be used to modify a string, you can view a list of all of them in this link: https://www.w3schools.com/php/php_ref_string.asp

### Question 1

   Open your form in the server **input.html**. What happens you type o’brian as the input to the username field (type anything for the password)? Are the any issues caused by the PHP file?

   + Nothing happened

### Question 2

   Open your form in the server **input.html**. Send the input o”neil to your form (send anything for the password). Are there any issues caused in the PHP file?

   + Nothing happened

### Question 3

   The **function addslashes()** can be used to prevent issues from occurring if a special character is used in the string. Modify your PHP file so that it displays the username, the username with slashes and the password. Try to type the input o’brian and then the input o”neil once again. How did the addslashes() function modify the string?

   + A back slash was added before apostrophes

### Question 4

   Modify your PHP file so that it displays 
   **The username** --> Afifa'Shanick'Ismael
   **The username with slashes** --> Afifa\\'Shanick\\'Ismael 
   **The password** --> 12345'54321 
   **The password with slashes** --> 12345\\'54321


### Question 5

   Sometimes users like to add extra spaces at the beginning and at the end of their form inputs. Those whitespaces do not really make a difference for most systems, so it’s important to remove them to avoid extra memory from being used. Find a function in the link above that removes whitespaces from BOTH sides of a string. Modify the file above so that it removes the whitespaces and trims the resulting string for both the username and the password. Your file should display:

   +   **The original username:** 

   +   **The modified username:**

   +   **The original password:**

   +   **The modified password:**

Test that this function works by usernames of that have extra whitespaces on the left and the right. What happens if the space is in the middle of the string?

a.The space in the middle stays in the string with Trim function

### Question 6

   Sometimes it is important to keep track of the size of a string. For example, certain passwords are supposed to be a specific size. Look at the link above, and find a function that returns the length of a string. Modify the PHP file so that it now displays also displays the size of the modified password after it displays the original password.

### Question 7

   Finally, the password provided is certainly NOT secure, because if it’s being stored as plaintext, someone can see it. To secure passwords, we must use encryption. Just so you can get a taste of

it, look at the md5() function in the link above. What is the purpose of MD5? Modify your file so that it now displays:

    +   The original username -> Afifa'Shanick'Ismael

    +   The modified username -> Afifa\'Shanick\'Ismael

    +   The original password -> 12345'54321 

    +   The size of the password -> 11

    +   The modified password (no whitespaces, and added slashes) -> 12345\'54321 

    +   The MD5 of the modified password.

If the password 123456 is entered, what is the resulting MD5? -> 12345500c66aaf5f2c3f49946f15c1ad2ea0d3

It displays this result : 123456e10adc3949ba59abbe56e057f20f883e

If the password 123455 is entered, what is the resulting MD5? 

It displays this result : 12345500c66aaf5f2c3f49946f15c1ad2ea0d3