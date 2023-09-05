<?php
// errorHandler.php
class ErrorHandler
{
    public static function logError($type, $message, $exception = null)
    {
        // Log the error with timestamp, type, message, and details
        $errorMessage = date('Y-m-d H:i:s') . " [$type] $message\n";

        if ($exception instanceof Exception) {
            $errorDetails = $exception->getMessage() . "\n" . $exception->getTraceAsString();
            $errorMessage .= "Details: " . $errorDetails . "\n";
        }

        //log the problem here
        file_put_contents('error/error_log.txt', $errorMessage, FILE_APPEND);

        // Message to the user
        echo "An error occurred, please try again later!\n";
        exit;
    }
}
?>