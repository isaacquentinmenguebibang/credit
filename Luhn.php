<?php
    namespace credit;
    class Luhn{
        public function create($s)
        {
            // Add a zero check digit
            $s = $s . '0';
            $sum = 0;
            // Find the last character
            $i = strlen($s);
            $odd_length = $i % 2;
            // Iterate all digits backwards
            while ($i-- > 0) {
                // Add the current digit
                $sum+=$s[$i];
                // If the digit is even, add it again. Adjust for digits 10+ by subtracting 9.
                ($odd_length == ($i % 2)) ? ($s[$i] > 4) ? ($sum+=($s[$i] - 9)) : ($sum+=$s[$i]) : false;
            }
            return (10 - ($sum % 10)) % 10;
        }
        public function validate($number)
        {
            $sum = 0;
            $numDigits = strlen($number) - 1;
            $parity = $numDigits % 2;
            for ($i = $numDigits; $i >= 0; $i--) {
                $digit = substr($number, $i, 1);
               if (!$parity == ($i % 2)) {
                   $digit <<= 1;
               }
            $digit = ($digit > 9) ? ($digit - 9) : $digit;
            $sum += $digit;
            }
            return (0 == ($sum % 10));
        }
    }
?>