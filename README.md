# ExpenseWepApp
Introduction to HouseholdExpense Web application

<h3> 1.1	What is HouseholdExpense webapp? </h3> <br>
<p> HouseholdExpense is an internet browser application that keeps track the household expenses and personal expenses of users and provides both summary and detail reports for household and personal user expenses on a monthly and daily basis, respectively.</p> <br>  

<h3> 1.2	Definitions </h3> 

<h4> 1.2.1	Household Expenses </h4> <br>
<p> These are expenses spent in maintaining the day to day functioning of the household. Examples of house hold expenses includes; Water. Electricity, Gas, Insurance, Home owners Association, cleaning, babysitting, cleaning services, Lawn and yard care.   
Each member of a household would only have access to data corresponding to the household to which he or she is registered to. </p> <br>

<h4> 1.2.2	Personal Expenses </h4> 
<p> These are expenses that the user spends on personal goods and services for his/her individual benefits. The list of personal expenses includes: dinner bills, personal item shopping bills, hospital bills, and school bills.
Personal expenses will be private to each user; other members of the house hold will not have access to the personal data of other users of the same house hold. </p>

<h4> 1.2.3	Users </h4> 
<h5> 1.2.3.1	Household Manager </h5> 
<p> These users will serve as the household group administrator. They will approve/validate entries of expenses, delete and approve addition of users, add and remove users to the admin list. <p>  
<h5> 1.2.3.2	Regular users </h5> 
These are all other users who are not household managers. These users are able to view and enter their household expenses.
Note: User will have full control over their personal data. 
<h5> 1.3	Core Features </h5> 
<ul> Registration/Un-registration 
    <li> •	Allows users to register and create house hold groups. 
    <il> •	Allows the addition of new users into an existing household.
    <il> •	A user can be remove from a household by the Household manager 
    <il> •	A user can register without belonging to any household. In this case he/she can only use the personal expense feature. 
Data collection 
    <il> •	Collect household and personal expenses from users.
Data presentation
    <il> •	Data will be presented to the user in two formats; summary and detailed ( The scopes of these presentation types are well specified in the design documentation) </il>
</ul> 
1.4	How is data collected from the users?
A webpage form will be provided for users to enter the data which shall be stored in a remote database. Data enter will likely only be the amount spent, expense type, and a short description (if need be). 
1.5	Security Features 
1.5.1	Authentication 
User will require a valid username and password to login into the application.
1.5.2	Password Recovery
Password will be recovered via email links or phone links (see the design documentation on how this feature is implemented). 
1.5.3	Data access level
Data access level will restrict users to have access only to authorized data. The will be two access levels for the users; personal access level and household access level, which are user specific, and household specific respectively. 

1.6	Overview of Model View Controller Implementation for this Webapp
The design of this web application will implement the Model-View-Controller concept. 
1.6.1	Model
This will be implemented with java using Plain Old Java Objects (POJO). Dependencies among these objects will be used to resolve dependencies among these objects (see design document for more details) 
1.6.2	View 
This will be implemented using JSP/HTML webpages. 
1.6.3	Controller 
Java servlets will be used as a controller. 

