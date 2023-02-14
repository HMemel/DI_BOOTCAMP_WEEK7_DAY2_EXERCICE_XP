<?php
    function myFunction($value) {
        try {
            if(filter_var($value, FILTER_VALIDATE_INT) === false) {
            throw new Exception("The value is not a valid integer.");
            } else {
                echo "Validation Complete.";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            
        }
    }

    $value = 3;
    myFunction($value);