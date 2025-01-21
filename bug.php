```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    // Handle file opening error
    echo "Error opening file.";
}
```