# Question2
/*----------------------------------*/

Used the concept of session inorder to store the data of the user
from the linkedin api .

Inside initialize.php curl function has been exported from OAuth api and 
getDetails functions is custom created by using using the features of 
OAuth Library such as httpbuildquery and api link which is stored in 
$url variable.

callback.php file is to instantiate the getdetails function through this
we are going to store the information in session i.e $user.

Once , we have a successful session we can easily store that data into a 
database and display.

/*---------------------------------*/
