
Query Refactoring:
- I see that there is alot of queries where we get unnecessary data which we don't want, so we have to just get selective columns only which we want to use
- We use bulk of if else conditions to perform a conditional query. Instead of this we can use when() in Laravel Query Builder
- Also for most of the complex insertion queries we need to use DB::beginTransaction() , DB::commit() and DB::rollback() so that in case of any issue it will rollback all operation
- There are some queries in which we get all columns from first() & then fetch the required one. Instead of this we may fetch only the column which we reuqired

Function Commenting: 
- Some of the complex function commenting is missing so in case of run Test/PHP Stan we receive Errors/Warnings

Functions:
- All the functions in the repository & controllers should be in try and catch
- Also we have to create a common helper of response with proper status code
- For CURL request we must have a helper function so that we don't have to write all the CURL methods for each request
- Also there is some commented code, we have to get rid from bunch of commented code
- For sending Mails we have to create a helper function
- Also there are alot of if else statements, there are multiple issues in that. We are using multiple if statements for same key, instead of this we may use if & elseif statements. And we also use switch statements instead of bunch of if else statements
- There are function consists of hundreds of lines of code, we may divide it into several smaller functions
- Also there are some couple of multiple foreach loops, we can handle them in a single one.
- Also we use logics in some functions of Controller, we can use our Logic Building in respositories to clean the Code. We try our best to keep Controller clean.

Form Request (Validation):
- There are lack of Validation on almost all the function. We have to implement validation to overcome if else statements

- Also we may use Auth or use middleware to attach __authenticatedUser with every Auth required requests instead of adding it in each function
- There is undefined variable $user_id in Controller
- In some places we can use Ternary Operators instead of multiple if else statements
- We may use Helper Function for queries which we have to use repeatedly