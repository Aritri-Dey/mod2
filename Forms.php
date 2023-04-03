<?php

  /**
   * Class contains followinf functions-
   *  Function to check only letters in data and numbers in phone number.
   */
  class Forms {

    /**
     * Function to check if data contains only alphabets .
     * 
     *   @param string $data-
     *     Firstname and last name of user
     *   
     *   @return int
     *     returns 1 if $data has only alphabets, else returns 0
     */
    function match($data) {
      if (!preg_match("/^[a-zA-Z-' ]*$/" , $data)) {
        echo "Only letters and white space allowed";
        return 0;
      } 
      return 1;
    }

    /**
     * Function to check if data contains only numbers and + sybmbol
     * and length is not more than 13 .
     * 
     *   @param string $data-
     *     phone number of user
     *   
     *   @return int
     *     returns 1 if conditions are satisfied, else returns 0
     */
    function validate_no($data) {
      if (!preg_match('/^[0-9+]{13}+$/', $data)) {
        return 0;
      } 
      return 1;
    }
  }
?>


