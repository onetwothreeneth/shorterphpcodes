# Shorter PHP codes
a simple php library for shorter codes. no need to create a php file for every function. all functions will be coded in 'ctrl.php'
for much cleaner code.

# How to use ?
  1. Send POST or GET datas to => model.php?ctrl=
  2. Then create a ctrl name example allusers -> you will post datas to this link -> model.php?ctrl=allusers
  3. Then create a function inside ctrl.php, that in this case its "allusers"
        public static function allusers(){
            //your code goes here 
        }
  4. change the database parameters in model.php 
  
## These are the functions you can use
  db::clean($string);  -> escapes the string
	db::looper($query);  -> returns an array
	db::get($column,$query);  -> returns a specific column in database
	db::json($query);  -> returns json array
	db::counts($query);  -> count sql results
	db::udi($query);  -> update,delete,insert function returns boolean 1 = success , 0 = error
	db::redirect($url);  -> redirects page 
	db::out($url);  -> remove sessions
