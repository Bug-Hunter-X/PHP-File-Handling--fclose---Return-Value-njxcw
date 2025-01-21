```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    // Process the file
    if (fclose($file) === false) {
        // Handle file closing error
        echo "Error closing file.";
    }
} else {
    // Handle file opening error
    echo "Error opening file.";
}
```