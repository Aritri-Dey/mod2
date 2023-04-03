<?php 
  /**
   * Email Validation-
   *  Checking for syntax validation , domain validation.
   */
  class EmailCheck { 

    /**
     * 
     *  @var $mail -
     *    global variable
     */
    public $mail;

    /**
     * Constructor to initialise global variable.
     * 
     *  @param string $mail-
     *    Mail id to be checked.
     * 
     *  @return bool - 
     *    Returns TRUE if no error is found, else retruns FALSE.
     */
    function __construct(string $mail){
     $this->mail = $mail;
    }
    function check(){
      // set email address
      $email_address = $this->mail;
      //set API Access Key
      $curl = curl_init();
      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.apilayer.com/email_verification/check?email=$email_address",
        CURLOPT_HTTPHEADER => array(
          "Content-Type: text/plain",
          "apikey: HhjXroOgyyWWxQjVW8TI8R7znPzFCOsy"
        ),
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      $validationResult = json_decode($response);
      //if validation is successful the $flag is set to 1, else $flag is set to 0.
      if ($validationResult->smtp_check) {
        $flag = TRUE;
      } 
      else  {
        $flag = FALSE;
      }
      return $flag;
    }
  }
?>

