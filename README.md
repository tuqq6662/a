# Collatz Conjecture (3x + 1) PHP Program

## Description
This PHP program calculates the Collatz sequence (also known as the 3x + 1 problem) for a given positive integer. The sequence follows these rules:
- If the number is even, divide it by 2.
- If the number is odd, multiply it by 3 and add 1.
- Repeat the process until the number reaches 1.

## Requirements
- PHP 7 or higher

## Usage
1. Open the `collatz.php` file.
2. Modify the `$number` variable to the desired starting number.
3. Run the script using a PHP server or command line:
   ```sh
   php collatz.php
   ```
4. The Collatz sequence for the given number will be displayed as output.

## Example Output
For input `12`, the program will output:
```
Collatz sequence for 12: 12 -> 6 -> 3 -> 10 -> 5 -> 16 -> 8 -> 4 -> 2 -> 1
```

## Notes
- The program ensures that the input is a positive integer.
- The sequence always terminates at 1 according to the Collatz conjecture.

