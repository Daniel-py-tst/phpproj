#### The source code for the PHP series "Learn PHP The Right Way".

This repository will contain the code related to specific lessons/videos separated by branches. For example, if you watched lesson 1.31 then you should switch to branch 1.31 to find the appropriate code for it. Each lesson that has an exercise or a mini project or some sort of related code, it will be available in the branch named after the lesson number. Note that not all lessons have associated code changes, so if a branch is missing for some lessons it simply means that there were no significant code changes in that lesson.

The final project of this series is under a separate repository: https://github.com/ggelashvili/expennies which is for the section P.

--- 
#### Branches
* **1.x** - Code for the first section of the course where **x** indicates the video number where it was implemented
* **2.x** - Code for the second section of the course where **x** indicates the video number where it was implemented
* **3.x** - Code for the third section of the course where **x** indicates the video number where it was implemented
* **P.x** - Code for these lessons are under **Expennies** repository: https://github.com/ggelashvili/expennies

---
#### Related Video
https://youtu.be/oXcX4ucj32M

---
#### Course Playlist
https://www.youtube.com/watch?v=sVbEyFZKgqk&list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-

---
#### Instructions
1. Set document root to _YOUR_PROJECT/public_, that way the site is loaded from _public/index.php_
   * You should include/require all other files in _index.php_, that's your main file
   * You can use APP_PATH, FILES_PATH & VIEWS_PATH constants that are defined in _index.php_ to help you with including files
2. Main code should go in app directory in any file that you choose, I created empty App.php that you can use to place your main logic but feel free to change it
   * You should define multiple functions there which will read **all** files within _transaction_files_ directory and process them. It is up to you how you want to read those files, but the goal is to read all files within that directory
   * You can assume that all files within _transaction_files_ directory are **.csv** files
   * One sample file is provided which contains formatted data
   * You can assume that all files in _transaction_files_ directory will be of same format for now
3. Store data in memory (in an array)
   * First column is the date of the transaction
   * Second column is the check # which is optional & is not always provided
   * The third column is transaction description
   * The fourth column is the amount (negative number indicates it's an expense, positive number indicates it's an income)
4. Calculate the total income, total expense & net total (total income - total expense)
5. Print a simple HTML table containing all the data from the files
   * The html skeleton is provided in views/transactions.php file
   * The date of the transaction should be in this format "Jan 4, 2021"
   * Show income amounts in green color & show expense amounts in red

Here is an example of what the table should look like

![Sample Output](result.png)
