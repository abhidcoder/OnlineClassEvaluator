# OnlineClassEvaluator
This project is about managing Attendance, Marks, Grades and Remarks of the students through online mode classes using Zoom meeting , Google meets and etc.

How To Run The Project:

1 - Create a folder COMPLETE_PROJECT
2 - Inside that folder paste all the files
3 - Now take that folder and install XAMPP
4 - Go to the the installed directorey of XAMPP
5 - Paste the folder COMPLETE_PROJECT in htdocs of XAMPP
6 - Run APACHE then Run MySQL
7 - Open any code editor eg, Brackets or VS code
8 - Open the file COMPLETE_PROJECT using the code editor
9 - run Startmember.php file
10 - You are all set.

Database this Project:
 
 Database has "demo" name

# Students tables:

1 - attendance_count --> [sr(primary key),usn(varchar),total_attendance_count(int),dept(varchar),year(varchar)]
2 - marks_list --> [usn(pk),name(varchar),dept(varchar),First(int),Second(int),Third(int),year(varchar),Remarks(varchar)]
3 - students_login -->[sr(pk),usn(varchar),name(varchar),password(varchar),year(varchar),dept(varchar)]

# Teachers Login Table:

4 - user_login --> [sr(pk),user_id(varchar),password(varchar),dept(varchar)]

# Automatic Entry In The Table

5 - attendance_sheet --> [Sr_no(pk),usn(varchar),time(timestamp),dept(varchar),year(varchar)]




