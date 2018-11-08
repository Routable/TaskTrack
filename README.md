![alt text](https://github.com/Routable/TaskTrack/blob/master/Screenshots/Homepage.png)

### PROJECT: TASKTRACK.TK
## AUTHORS: Steven Bucholtz, and Brett Steck

When we set out to create our project, we drew inspiration from Support Ticket systems such as SalesForce, ZenDesk, FreshDesk, and WHMCS. 

Obviously, creating a full ticket system with the timeframe and resources we have is an impossible task, so we set to create a functioning
system that had the following (major) functionality:

![alt text](https://github.com/Routable/TaskTrack/blob/master/Screenshots/TasksCreated.PNG)

### WORKING:
#1) Hosted on a live server on the Internet. (Working - Researched/Performed by Steven Bucholtz/Brett Steck)

#2) Secured via a -REAL- SSL certificate, and accessed via a -REAL- domain name. (Working - Researched/Performed by Steven Bucholtz)

#3) Safeguarded from SQL injecting attacks, with a minimum SHA1 hash requirement on all sensitive data. (Working - Researched/Performed by Steven Bucholtz/Brett Steck)

#4) A "Forgot Password" feature that (without informing attackers if the email exists or not) generates
    a randomized password that is emailed to the user. This password can then be used to log in to the account. (Working - Researched/Performed by Steven Bucholtz)

#5) Client AND Server side verification for form entries. As an example, on the register.html and settings.php pages (Working - Researched/Performed by Steven Bucholtz/Brett Steck)
    we have created our own custom Javascript function that assures certain fields are matching, and are colored as such. 
    Any applicable form buttons are disabled until the data inside the forms are matching.

#6) The ability to sort our SQL query table (results) numerically, alphabetically, and by date. (Working - Researched/Performed by Brett Steck/Steven Bucholtz

#7) Perform automatic queries that occur in the background (without the users knowledge) that calculate averages on response time, etc. (Working - Researched/Performed by Brett Steck)

![alt text](https://github.com/Routable/TaskTrack/blob/master/Screenshots/NewUserDashboard.PNG)

### NOT WORKING:
We originally intended to include "Team" functionality, to allow users to be a part of groups. These groups could then be implemented
to provide viewing/creation permissions on a per-user basis. Shortly into the project, we realized how much work this would actually be, 
and decided to eliminate it from our scope. However, it should be noted that the framework of the site has been constructed to allow this 
to be added in the future. 

In addition, the website is currently considered to be MOBILE UNFRIENDLY. To be blunt, the work put in was quite significant. Spending countless hours creating
mobile device specific pages for scaling was not something we thought was time efficient, nor required for the project scope.

![alt text](https://github.com/Routable/TaskTrack/blob/master/Screenshots/Signup1.PNG)

### Other mentions: 

Website is being hosted by DigitalOcean on our own, private APACHE/LAMP server that we configured. All applicable security/htaccess measures were implemented. 

A free credit for $50 dollars can be obtained at https://education.github.com/pack for all applicable students. 
Our .tk domain name was obtained for free from http://www.dot.tk/ which is provided by the Government of Tokelau to anyone who wants one. 

Our SSL certificate was obtained for free from https://letsencrypt.org/ which is a free, automated, and open certificate authority. 

TOTAL COST OF PROJECT: $0. 

We did attempt to help a few specific groups configure, and get their servers working, as they thought what we had working was fantastic. Let it be known that we were the "first" to research and configure our server, and provided this knowledge to others who were interested enough to ask about it.
