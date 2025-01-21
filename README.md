# PHP File Handling: fclose() Return Value

This repository demonstrates a common but often overlooked error in PHP file handling.  The code in `bug.php` opens a file. While it checks if `fopen()` successfully opened the file, it doesn't verify the success of `fclose()`. Failure to check `fclose()` might cause unexpected problems, especially when the file is large or the system is under heavy load.  The `bugSolution.php` file presents a correction to the bug.

## Bug Description

The primary issue is the lack of error handling for `fclose()`.  While `fopen()`'s return value is checked,  `fclose()`'s return value (boolean true for success, false for failure) is disregarded.  If `fclose()` fails (e.g., due to permissions issues or system errors), the script silently continues, potentially leaving file handles open and consuming resources.