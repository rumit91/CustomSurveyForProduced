# Custom Survey for the UVA Distributed Education Department
UVA offers online engineering courses through programs called [CGEP](http://cgep.virginia.edu/) and [Engineers PRODUCED in Virginia](http://www.seas.virginia.edu/acad/programs/producedinva/). In December of 2012 I worked with the PRODUCED program to create a custom survey to gather feedback and insights about the experience of the students in the program. I designed and implemented web interface and backend for the survey, but did not design the questions or the language used. 

## Implementation
- MySQL database
- PHP for backend
- HTML, CSS, JS (jQuery) for frontend
- Bootstrap for basic frontend components

## Screenshots
Here are a few screenshots of the interface:

![Section 4 - Custom form elements](https://kyfupg.dm2302.livefilestore.com/y3myHxw_hoqS03oqZ2pQxjaDtsyNKIu_IYu2mxMvNPhfr96ZNkhQ6W7vYW6wogYSkiQlr0Oq1twQWGy28sNH8T2OpzJapRd9Q5VrOnIcoQ7pX72BcQEjnDCScEzdRGsBiWMmTfiWR2efyn_V_3ybw0VqUAP5cdcmhC_Vw0I0i6cwYU/Section%204.png?psid=1)

This section of the survey involved creating custom form elements that scroll with the page.

![Section 5 - Drag and drop form elements](https://lpx7nq.dm2302.livefilestore.com/y3mru0s2T063MTdgVp7BGm3uVLEEZKwnjGbU1_S00M7rBdVe7YLX7AB_ziIHaQNhZgqsT422IS-uIkJRr3e9GIiX76RYwW221bCOCHJXCGQNws4BXrfWduWDuWAq8RUhVBvGSEn1HcY_VJR290QnMvX1pT87Y7A-IGE3NLBAWrZuPs/Section%205.png?psid=1)

In this section I used drag and drop elements to allow survey participants to quickly rank their choices.

## Improvements I would make if implementing today
I wrote this web app at the end of 2012. Since then many things have changed in the web development world and I have learned a lot more about web dev, security, best practices, and coding in general. Here are a few of the things I would do differently if I were working on this project in 2017:

#### Software Development Practices
- **Code Repo**: I was storing all the code for this survey on my own computer with daily backups to the school server. Today I would use a code repository like Github or [Visual Studio Team Services](https://www.visualstudio.com/team-services/git/), which would preserve the work history and allow others to contribute if desired. 
- **Build tools**: I would use Gulp as my task runner and NPM for managing all of my dependencies (instead of manually including them alongside my code).

#### Security
- **User passwords**: This project didn't have much sensitive information associated with it, so there were no explicit security requirements. Since, at the time, I dind't know any better, I ended up using MD5 for password hashing. MD5 hashes can be cracked pretty quickly today. Instead I would use a more secure hashing algorithm, such as bcrypt (`password_hash()` function in PHP). I would also use salts to avoid rainbow table lookups (PHP's `password_hash()` return value includes the salt by default).
- **Database security**: I was storing my local test database credentials along with my code. This meant that when the project was deployed it required the system admin to change the database credentials in the code. Instead we should have stored the credentials in a separete config file.
- **SQL**: Although I used PHP's `real_escape_string()` there were still possibilities for SQL injection in my code. Today I would use [prepared statements](http://php.net/manual/en/pdo.prepared-statements.php) to address this threat.

#### Architecture and code
- **PHP**: For this project I used procedural PHP to interact with the data in the db. Instead I would create a object-oriented database client and use [PHP Data Objects (PDO) for MySQL](http://php.net/manual/en/ref.pdo-mysql.php).    
- **JS**: I would use a modern JS framework such as React or Angular. I would also use Typescript which allows you to avoid a bunch of typical JS bugs and makes you more confident about large scale changes or refactoring.
- **CSS**: A css pre-processor like Less would allow me to create more maintainable css with variables and mixins. I might even use the [BEM methodology](https://css-tricks.com/bem-101/) though this project is probably not big enough to require this.
- **HTML**: If I were to implement this today and I decide not to use React I would at least use an HTML template engine like Handlebars.js. 
